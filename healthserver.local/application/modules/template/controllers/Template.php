<?php
class Template extends MX_Controller 
{

	private $template_theme = array();

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model("profile/user_meta");
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		if (!($this->ion_auth->logged_in() && $this->ion_auth->is_admin()))
		{
			redirect('login', 'refresh');
		}

		if($this->secure_session->validateSessionData($this->ion_auth->user()->row()->id) != TRUE){
			redirect('auth/logout', 'refresh');
		}

		

		$this->template_theme["header"] = "header-red";
		$this->template_theme["logo"] = "logo-red";
		$this->template_theme["side"] = "red-sidebar-color";

	}

	function index(){
		redirect("login");
	}

	public function theme($data , $template ="template_view")
	{
		$user = $this->ion_auth->user()->row();
		$user_meta = $this->user_meta->where('user_id', $user->id )->get();

		$template_color = (json_decode($user_meta->template_theme));


		$this->load->model('student/student_model');
		$all_students_date = $this->student_model->get_all();

		$current_date = date("Y-m-d");
		$current_date = explode("-", $current_date );

		$student_birthday = array();

		foreach($all_students_date as $student_date){
			$dob = $student_date->dob;
			$dob = explode("-" , $dob);
			$age = intval($current_date[0]) - intval($dob[0]);

			if($dob[1] == $current_date[1] && $dob[2] == $current_date[2] ){
				$student_birthday[$student_date->fullname] = array(
					'id' => $student_date->id,
					'name' => $student_date->fullname,
					'age' => $age,
					);
			}

		}
		$data["student_birthday"] = $student_birthday;














		$data["template_theme"] = $template_color;
		$data["user"] = $this->ion_auth->user()->row();

		$this->load->model("enquiry/enquiry_model");
		$data["unread_enquiries"] = $this->enquiry_model->where("enquiry_status" , "0")->count_rows(); ;
		//$data["datas"] = 
		$this->load->view($template , $data);
	}

}