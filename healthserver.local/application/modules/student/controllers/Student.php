<?php
class Student extends MX_Controller 
{

	private $upload_error;
	private $file_name;

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		//$this->load->library('encrypt');

		$this->load->module('template');
	}

	function index(){
		$this->load->model('student_model');
		$this->load->model('fee/student_fee');
		
		$data["title"] = "All Student";
		$data["view_page"] = "student/view";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];


		$students = $this->student_model->get_all();
		$data["students"] = $students;

		$total_fee = 0;

		$student_fee_due = array();
	
		foreach ($students as $student) {

			$student_fees = $this->student_fee->where(array("student_id" => $student->id))->order_by("next_installement", "DESC")->get_all();

			if($this->student_fee->where(array("student_id" => $student->id))->order_by("next_installement", "DESC")->count_rows() > 0){
				foreach($student_fees as $student_fee){
					$total_fee = $total_fee + $student_fee->amount;
					break;
				}

				if($total_fee >= $student->installation_amount ){
					//status = complete
					$student_fee_due[$student->id] = "complete";
				}else{
					$date = $this->getFirstOFObject($student_fees)->next_installement;
					//$timeleft = time() - strtotime($date);
					if(time() - (60*60*24) < strtotime($date)){
						// Available
						$student_fee_due[$student->id] = "ok";
					}else{
						$student_fee_due[$student->id] = "due";
					}

				}
			}else{
				//echo "<script>alert('".$student->id."')</script>";
				$student_fee_due[$student->id] = "unknown";
			}
			//$student
		}

		$data["due_detail"] = $student_fee_due;

		$this->template->theme($data);
	}

	function getFirstOFObject($objs){
		foreach($objs as $obj){
			$first = $obj;
			break;
		}
		return $first;
	}

	function add($enq_id = NULL){
		$data["title"] = "Add Student";
		$data["view_page"] = "student/add";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];

		$this->load->library('form_validation');

		$this->load->model('student_model');
		$this->load->model('source');
		$this->load->model('student_course');
		$this->load->model('student_status');

		$this->load->model('fee/student_fee');

		$data["sources"] = $this->source->get_all();
		$data["student_courses"] = $this->student_course->get_all();
		$data["student_status"] = $this->student_status->get_all();


		$this->form_validation->set_rules('title', 'Username', 'required');
		$this->form_validation->set_rules('fullname', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Username', 'required');
		$this->form_validation->set_rules('phone', 'Username', 'required');
		$this->form_validation->set_rules('gender', 'Username', 'required');
		$this->form_validation->set_rules('dob', 'Username', 'required');
		$this->form_validation->set_rules('parent_name', 'Username', 'required');
		$this->form_validation->set_rules('parent_number', 'Username', 'required');
		$this->form_validation->set_rules('address', 'Username', 'required');
		$this->form_validation->set_rules('source', 'Username', 'required');
		$this->form_validation->set_rules('course', 'Username', 'required');
		$this->form_validation->set_rules('date_of_enrollement', 'Username', 'required');
		//image
		$this->form_validation->set_rules('status', 'Username', 'required');
		$this->form_validation->set_rules('installation_amount', 'Username', 'required');

		$this->form_validation->set_rules('payment_type', 'Username', 'required');
		$this->form_validation->set_rules('bank', 'Username', 'required');
		$this->form_validation->set_rules('initial_deposite', 'Username', 'required');
		$this->form_validation->set_rules('next_installement_date', 'Username', 'required');
		$this->form_validation->set_rules('invoice_number', 'Username', 'required');
		
		//$this->form_validation->run() == FALSE
		if ($this->form_validation->run() == FALSE)
		{
			if($this->input->post("fullname") != NULL){
				$data["form_status"] = "false";
			}else if($enq_id != NULL){
				$this->load->model("enquiry/enquiry_model");
				$enq_detail = $this->enquiry_model->where("id",$enq_id)->get();

				if($this->enquiry_model->where("id",$enq_id)->count_rows() != 1){
					redirect("student/add");
				}
				$data["enq_detail"] = $enq_detail;
				
			}else{}

				//print_r($enq_detail);
			
			$this->template->theme($data);
		}
		else
		{	$student_info = array();
			$fee_info = array();

				if($this->do_upload("image")){

					$student_info["image"] = $this->file_name;
				}

			$student_info["title"] = $this->input->post("title");
			$student_info["fullname"] = $this->input->post("fullname");
			$student_info["email"] = $this->input->post("email");
			$student_info["phone"] = $this->input->post("phone");
			$student_info["gender"] = $this->input->post("gender");
			$student_info["dob"] = $this->input->post("dob");
			$student_info["parent_name"] = $this->input->post("parent_name");
			$student_info["parent_number"] = $this->input->post("parent_number");
			$student_info["address"] = $this->input->post("address");
			$student_info["source"] = $this->input->post("source");
			$student_info["course"] = $this->input->post("course");
			$student_info["date_of_enrollement"] = $this->input->post("date_of_enrollement");
			$student_info["status"] = $this->input->post("status");
			$student_info["installation_amount"] = $this->input->post("installation_amount");

			$student_id = $this->student_model->insert($student_info);

			$fee_info["student_id"] = $student_id;
			$fee_info["invoice_number"] = $this->input->post("invoice_number");
			$fee_info["payment_type"] =  $this->input->post("payment_type");
			$fee_info["bank"] = $this->input->post("bank");
			$fee_info["amount"] = $this->input->post("initial_deposite");//amount
			$fee_info["date_of_payment"] = $this->input->post("date_of_enrollement");
			$fee_info["next_installement"] = $this->input->post("next_installement_date");

			if($this->student_fee->insert($fee_info)){
				redirect("student/view/".$student_id);
			}else{
				$data["form_status"] = $this->upload_error;
			}

			$this->template->theme($data);
		}

		
	}

	function view($id = NULL){

		if($id != NULL){
			$data["title"] = "View Student";
			$data["view_page"] = "student/update";
			$data["page_javascript"] = [];
			$data["page_css"] = [];
			$data["page_font"] = [];


			$this->load->model('student_model');
			$this->load->model('fee/student_fee');

			$this->load->library('form_validation');

			$this->load->model('source');
			$this->load->model('student_course');
			$this->load->model('student_status');


			$data["sources"] = $this->source->get_all();
			$data["student_courses"] = $this->student_course->get_all();
			$data["student_status"] = $this->student_status->get_all();


			$this->form_validation->set_rules('title', 'Username', 'required');
			$this->form_validation->set_rules('fullname', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Username', 'required');
			$this->form_validation->set_rules('phone', 'Username', 'required');
			$this->form_validation->set_rules('gender', 'Username', 'required');
			$this->form_validation->set_rules('dob', 'Username', 'required');
			$this->form_validation->set_rules('parent_name', 'Username', 'required');
			$this->form_validation->set_rules('parent_number', 'Username', 'required');
			$this->form_validation->set_rules('address', 'Username', 'required');
			$this->form_validation->set_rules('source', 'Username', 'required');
			$this->form_validation->set_rules('course', 'Username', 'required');
			$this->form_validation->set_rules('date_of_enrollement', 'Username', 'required');
			//image
			$this->form_validation->set_rules('status', 'Username', 'required');
			$this->form_validation->set_rules('installation_amount', 'Username', 'required');

			$this->form_validation->set_rules('payment_type', 'Username', 'required');
			$this->form_validation->set_rules('bank', 'Username', 'required');
			$this->form_validation->set_rules('initial_deposite', 'Username', 'required');
			$this->form_validation->set_rules('next_installement_date', 'Username', 'required');
			$this->form_validation->set_rules('invoice_number', 'Username', 'required');
			
			//$this->form_validation->run() == FALSE
			if ($this->form_validation->run() == TRUE)
			{
				if($this->input->post("fullname") != NULL){
					$data["form_status"] = "false";
				}
				
				$student_info = array();
				$fee_info = array();

					if($this->do_upload("image")){

						$student_info["image"] = $this->file_name;
					}
				
				//$student_info["id"] = $id;
				$student_info["title"] = $this->input->post("title");
				$student_info["fullname"] = $this->input->post("fullname");
				$student_info["email"] = $this->input->post("email");
				$student_info["phone"] = $this->input->post("phone");
				$student_info["gender"] = $this->input->post("gender");
				$student_info["dob"] = $this->input->post("dob");
				$student_info["parent_name"] = $this->input->post("parent_name");
				$student_info["parent_number"] = $this->input->post("parent_number");
				$student_info["address"] = $this->input->post("address");
				$student_info["source"] = $this->input->post("source");
				$student_info["course"] = $this->input->post("course");
				$student_info["date_of_enrollement"] = $this->input->post("date_of_enrollement");
				$student_info["status"] = $this->input->post("status");
				$student_info["installation_amount"] = $this->input->post("installation_amount");

				$student_id = $this->student_model->update($student_info,$id);

				$fee_info["student_id"] = $id;
				$fee_info["invoice_number"] = $this->input->post("invoice_number");
				$fee_info["payment_type"] =  $this->input->post("payment_type");
				$fee_info["bank"] = $this->input->post("bank");
				$fee_info["amount"] = $this->input->post("initial_deposite");//amount
				$fee_info["date_of_payment"] = $this->input->post("date_of_enrollement");
				$fee_info["next_installement"] = $this->input->post("next_installement_date");

				if($this->student_fee->update($fee_info , "student_id")){
					redirect("student/view/".$id);
				}else{
					$data["form_status"] = $this->upload_error;
				}

				// use else if later
			}else{
				$student_infos = $this->student_model->get($id);
				$student_fees = $this->student_fee->where("student_id", $student_infos->id)->order_by("id", "DESC")->get_all();//date_of_payment
				$student_first_fee = $this->student_fee->where(array("student_id" => $student_infos->id))->order_by("id", "DESC")->get();

				$student_form_info = array();

				$student_form_info["title"] = $student_infos->title;
				$student_form_info["fullname"] = $student_infos->fullname;
				$student_form_info["email"] = $student_infos->email;
				$student_form_info["phone"] = $student_infos->phone;
				$student_form_info["gender"] = $student_infos->gender;
				$student_form_info["dob"] = $student_infos->dob;
				$student_form_info["parent_name"] = $student_infos->parent_name;
				$student_form_info["parent_number"] = $student_infos->parent_number;
				$student_form_info["address"] = $student_infos->address;
				$student_form_info["source"] = $student_infos->source;
				$student_form_info["course"] = $student_infos->course;
				$student_form_info["date_of_enrollement"] = $student_infos->date_of_enrollement;
				$student_form_info["status"] = $student_infos->status;
				$student_form_info["installation_amount"] = $student_infos->installation_amount;

				$student_form_info["invoice_number"] = $student_first_fee->invoice_number;
				$student_form_info["payment_type"] =  $student_first_fee->payment_type;
				$student_form_info["bank"] = $student_first_fee->bank;
				$student_form_info["initial_deposite"] = $student_first_fee->amount;//amount
				$student_form_info["next_installement"] = $student_first_fee->next_installement;

				$data["form_info"] = $student_form_info ;
				$data["student_data"] = $student_infos ;
				$data["student_fees"] = $student_fees;
			}


			$this->template->theme($data);
		}else{
			redirect("student");
		}
	}


	public function do_upload($name = "image")
	{
		$config['upload_path']          = './public/uploads/students/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2048;


		$this->load->library('upload', $config);

		if(! $this->upload->do_upload($name))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->upload_error = $error;
			return false;
		}
		else
		{
			//$data = array('upload_data' => $this->upload->data());
			$this->file_name = $this->upload->data('file_name');
			return true;
		}
	}



}