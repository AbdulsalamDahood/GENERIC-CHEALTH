<?php
class Fee extends MX_Controller 
{

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->load->model('student_fee');

		$this->load->module('template');
	}

	function index(){
		
		$data["title"] = "Fees Collection";
		$data["view_page"] = "fee/view";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];

		$this->load->model('student/student_model');
		$this->load->model('fee/student_fee');

		$students = $this->student_model->get_all();
		$data["students"] = $students;

		$fees  = $this->student_fee->order_by("date_of_payment" , "DESC")->get_all();
		$data["fees"] = $fees;

		$newfees = array();

		$i = 0;
		foreach($fees as $fee){
			//roll no
			//student name
			//date
			//invoice no
			//payment type
			//amount
			$newfee = array(
				'fee_id' => $fee->id,
				'student_id' => $fee->student_id,
				'student_name' => $this->fetch_student_name($fee->student_id),
				'date' => $fee->date_of_payment,
				'invoice_number' => $fee->invoice_number,
				'payment_type' => $fee->payment_type,
				'amount' => $fee->amount
			);
			$newfees[$i] = $newfee;
			$i++;
		}

		$data["fees_detail"] = $newfees;

		$this->template->theme($data);
	}

	function fetch_student_name($id){
		$this->load->model('student/student_model');
		$student_detail = $this->student_model->where("id" , $id)->with_trashed()->get();
		return  $student_detail->fullname;	
	}





	function add($std_id = NULL){
		$data["title"] = "Add Fee";
		$data["view_page"] = "fee/add";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];


		$this->load->model('student/student_model');
		if($std_id != NULL){
			$data["std"] = $this->student_model->where($std_id)->get();
		}
		

		//$this->form_validation->set_rules('student_name', 'Username');

		$this->form_validation->set_rules('rollno', 'Username', 'required');
		$this->form_validation->set_rules('date_of_payment', 'Username', 'required');
		$this->form_validation->set_rules('payment_type', 'Username', 'required');
		$this->form_validation->set_rules('bank', 'Username', 'required');
		$this->form_validation->set_rules('amount', 'Username', 'required');
		$this->form_validation->set_rules('next_installement_date', 'Username', 'required');
		$this->form_validation->set_rules('invoice_number', 'Username', 'required');

		if ($this->form_validation->run() == FALSE){

			$students = $this->student_model->get_all();
			$data["students"] = $students;
			$this->template->theme($data);
		}else{
			//Roll dont exist
			$noroll = $this->student_model->count_rows(array("id" => $this->input->post('rollno') ));
			if($noroll != 1){

				$students = $this->student_model->get_all();
				$data["students"] = $students;
				$this->template->theme($data);

			}else{
				$this->load->model('fee/student_fee');
				$fee_data = array();
				$fee_data["student_id"] = $this->input->post('rollno');
				$fee_data["date_of_payment"] = $this->input->post('date_of_payment');
				$fee_data["payment_type"] = $this->input->post('payment_type');
				$fee_data["bank"] = $this->input->post('bank');
				$fee_data["amount"] = $this->input->post('amount');
				$fee_data["next_installement"] = $this->input->post('next_installement_date');
				$fee_data["invoice_number"] = $this->input->post('invoice_number');

				$fee_id = $this->student_fee->insert($fee_data);

				if($fee_id != NULL){
					redirect("fee/view/".$fee_id);
				}else{
					$students = $this->student_model->get_all();
					$data["students"] = $students;
					$this->template->theme($data);
				}

			}

		}

	}

	function view($id = NULL){

		if($id != NULL){

			$data["title"] = "View Fee";
			$data["view_page"] = "fee/update";
			$data["page_javascript"] = [];
			$data["page_css"] = [];
			$data["page_font"] = [];

			$this->load->model('student/student_model');
			$this->load->model('fee/student_fee');

			$full_fee = $this->student_fee->where(array("id" => $id))->get();
			$data["full_fee"] = $full_fee;

			$data["fee_other"] = array(
				'fee_id' => $full_fee->id,
				'student_table' => $this->student_model->where("id" , $full_fee->student_id)->get(),
				'student_id' => $full_fee->student_id,
				'student_name' => $this->fetch_student_name($full_fee->student_id),
				'date' => $full_fee->date_of_payment,
				'invoice_number' => $full_fee->invoice_number,
				'payment_type' => $full_fee->payment_type,
				'amount' => $full_fee->amount
			);






			$this->form_validation->set_rules('rollno', 'Username', 'required');
			$this->form_validation->set_rules('date_of_payment', 'Username', 'required');
			$this->form_validation->set_rules('payment_type', 'Username', 'required');
			$this->form_validation->set_rules('bank', 'Username', 'required');
			$this->form_validation->set_rules('amount', 'Username', 'required');
			$this->form_validation->set_rules('next_installement_date', 'Username', 'required');
			$this->form_validation->set_rules('invoice_number', 'Username', 'required');

			if ($this->form_validation->run() == FALSE){

				//get form and dispaly

				$students = $this->student_model->get_all();
				$data["students"] = $students;


				$this->template->theme($data);
			}else{
				//Roll dont exist
				$noroll = $this->student_model->count_rows(array("id" => $this->input->post('rollno') ));
				if($noroll != 1){

					$students = $this->student_model->get_all();
					$data["students"] = $students;
					$this->template->theme($data);

				}else{
					
					$fee_data = array();
					$fee_data["student_id"] = $this->input->post('rollno');
					$fee_data["date_of_payment"] = $this->input->post('date_of_payment');
					$fee_data["payment_type"] = $this->input->post('payment_type');
					$fee_data["bank"] = $this->input->post('bank');
					$fee_data["amount"] = $this->input->post('amount');
					$fee_data["next_installement"] = $this->input->post('next_installement_date');
					$fee_data["invoice_number"] = $this->input->post('invoice_number');

					$fee_id = $this->student_fee->update($fee_data,$id);

					if($fee_id != NULL){
						redirect("fee/view/".$id);
					}else{
						$students = $this->student_model->get_all();
						$data["students"] = $students;
						$this->template->theme($data);
					}

				}
			}

		}else{
			redirect("fee");
		}
		
	}

	function delete($id = NULL){
		$this->load->model("student_fee");
		if($id != NULL){
			if($this->student_fee->where("id" , $id)->delete()){
				redirect("fee");
			}else{
				redirect("fee");
			}
		}else{
			redirect("fee");
		}

	}


}