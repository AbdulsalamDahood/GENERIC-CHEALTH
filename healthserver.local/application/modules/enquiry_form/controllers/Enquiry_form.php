<?php
class Enquiry_form extends MX_Controller 
{

    public function __construct()
	{
		parent::__construct();
		// $this->load->database();
		// $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		// $this->load->model('mdl_name');
		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin())
		// {
			
		// }else {
		// 	redirect('login', 'refresh');
		// }

		$this->load->database();



	}


	function index(){
		$data["title"] = "Aptech Ajah | Enquiry Form";
		$data["view_page"] = "student/add";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];

		$this->load->library('form_validation');

		
		$this->load->model('student/student_status');
		$this->load->model('enquiry/enquiry_model');

		$data["student_status"] = $this->student_status->get_all();


		
		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('address', 'Username', 'required');
		$this->form_validation->set_rules('phone', 'Username', 'required');
		$this->form_validation->set_rules('gender', 'Username', 'required');
		$this->form_validation->set_rules('dob', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Username', 'required');
		$this->form_validation->set_rules('p_name', 'Username', 'required');
		$this->form_validation->set_rules('p_phone', 'Username', 'required');
		$this->form_validation->set_rules('education_qualification', 'Username', 'required');

		$this->form_validation->set_rules('career_field', 'Username');
		$this->form_validation->set_rules('future_plan', 'Username');
		
		
		//$this->form_validation->run() == FALSE
		if ($this->form_validation->run() == FALSE)
		{
			if($this->input->post("fullname") != NULL){
				$data["form_status"] = "false";
			}
			
			$this->load->view("view" , $data);
		}
		else
		{	
			$enquiry_info = array();

			$enquiry_info["title"] = $this->input->post("title");
			$enquiry_info["name"] = $this->input->post("name");
			$enquiry_info["address"] = $this->input->post("address");
			$enquiry_info["phone"] = $this->input->post("phone");
			$enquiry_info["gender"] = $this->input->post("gender");
			$enquiry_info["dob"] = $this->input->post("dob");
			$enquiry_info["email"] = $this->input->post("email");
			$enquiry_info["p_name"] = $this->input->post("p_name");
			$enquiry_info["p_phone"] = $this->input->post("p_phone");
			$enquiry_info["education_qualification"] = $this->input->post("education_qualification");
			$enquiry_info["career_field"] = $this->input->post("career_field");
			$enquiry_info["future_plan"] = $this->input->post("future_plan");


			if($this->enquiry_model->insert($enquiry_info)){
				redirect("enquiry_form" , "refresh");
			}else{
				$data["form_status"] = $this->upload_error;
			}

			$this->load->view("view" , $data);
		}

		
	}

}