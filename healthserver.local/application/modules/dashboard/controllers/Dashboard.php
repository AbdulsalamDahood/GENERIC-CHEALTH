<?php
class Dashboard extends MX_Controller 
{

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		//$this->load->model('mdl_dashboard');

		$this->load->module('template');
	}

	function index(){
		
		$data["title"] = "Dashboard";
		$data["view_page"] = "dashboard/dashboard";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];

		$this->load->model('student/student_model');
		$this->load->model('student/student_course');
		$this->load->model('fee/student_fee');

		$data["allcourse"] = $this->student_course->count_rows();

		$allfees = $this->student_fee->get_all();

		$all = $this->student_model->count_rows();
		$adse = $this->student_model->where(array("course" => "ADSE"))->count_rows();
		$cpism = $this->student_model->where(array("course" => "CPISM"))->count_rows();
		$dism = $this->student_model->where(array("course" => "DISM"))->count_rows();
		$msoffice = $this->student_model->where(array("course" => "MS OFFICE"))->count_rows();
		$ittest = $this->student_model->where(array("course" => "IT ESS"))->count_rows();
		$ccna = $this->student_model->where(array("course" => "CCNA"))->count_rows();

		$total_fees = 0;

		foreach($allfees as $fee){
			$total_fees += $fee->amount;
		}

		$data["totalfee"] = $total_fees;

		$allstudentrr = $this->student_model->get_all();

		$numnew = 0;
		foreach($allstudentrr as $studentrr){

			$date = strtotime(date("Y-m-d"));
			$stdate = strtotime($studentrr->date_of_enrollement);
			//$data["date"] =  ($date - $stdate)/ (60*60*24);
			if((($date - $stdate)/ (60*60*24)) < 30 ){
				$numnew++;
			}
		}

		$data["date"] = $numnew;


		



		$others = $all - ($adse + $cpism + $dism + $msoffice + $ittest + $ccna);

		$aval_student = array(
			'all' => $all ,
			'adse' => $adse ,
			'cpism' => $cpism ,
			'dism' => $dism ,
			'msoffice' => $msoffice ,
			'ittest' => $ittest ,
			'ccna' => $ccna ,
			'others' => $others ,
		);

		$data["aval_student"] = $aval_student;


		$data["user_todo"] = (array)$this->usertodo();
		$data["user_todo_lenght"] = sizeof($data["user_todo"]);

		
		

		if($this->usertodo() == FALSE){
			$data["user_todo_lenght"] = 0;
		}
		
		$data["user_todo_obj"] = $this->usertodo();

		$this->template->theme($data);
	}



	function todoadd(){
		$text = $this->input->post("todoid");
		if($text != NULL){
			$this->load->model("profile/user_todo");
			$user_id = $this->ion_auth->user()->row()->id;

			$inserted_id = $this->user_todo->insert(array("user_id"=> $user_id , "todo" => $text ));

			
				$alltodo = $this->user_todo->where("user_id" , $user_id)->get_all();


			echo $inserted_id;

		}else{
			redirect("dashboard");
		}

	}

	function usertodo(){
		$user_id = $this->ion_auth->user()->row()->id;
		$this->load->model("profile/user_todo");
		$alltodo = $this->user_todo->where("user_id" , $user_id)->get_all();
		return $alltodo;
	}


	function tododel(){

		$text = $this->input->post("todoid");
		if($text != NULL){
			$this->load->model("profile/user_todo");
			
			$this->user_todo->where("id" , $text)->delete();

		}else{
			redirect("dashboard");
		}

	}

	function todocheck(){
	echo "<script>alert('gdggdgdg')</script>";
		$text = $this->input->post("todoid");
		if($text != NULL){
			$this->load->model("profile/user_todo");
			
			$todo = $this->user_todo->where("id" , $text)->get();

			echo "<script>alert(".$text.")</script>";

			if($todo->status == 0){
				$this->user_todo->update(array("status" => 1) , $text );
			}else{
				$this->user_todo->update(array("status" => 0) , $text );
			}

		}else{
			redirect("dashboard");
		}

	}

	

}

