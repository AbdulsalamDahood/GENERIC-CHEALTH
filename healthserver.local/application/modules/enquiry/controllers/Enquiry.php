<?php
class Enquiry extends MX_Controller 
{

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		// $this->load->model('mdl_enquiry');

		$this->load->module('template');
	}

	function index(){
		// $this->othweer();
		$data["title"] = "Enquiry";
		$data["main_title"] = "Enquiry";
		
		$data["view_page"] = "enquiry/enquiry_template";
		$data["email_template"] = "enquiry/enquiry_all";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];

		$this->load->model("enquiry_model");
		$this->load->model("remark");

		$data["enquiries"] = $this->enquiry_model->get_all();

		$data["enquiries_count"] = $this->enquiry_model->count_rows();
		$data["unread_enquiries"] = $this->enquiry_model->where("enquiry_status" , "0")->or_where(array("enquiry_status"=>"1","enquiry_status"=>"2"))->count_rows(); 
		$data["deleted_enquiries"] = $this->enquiry_model->only_trashed()->count_rows();
		$data["remark_draft"] = $this->remark->where("status" , "0")->count_rows();

		$this->template->theme($data);
	}

	function trash(){
		
		$data["title"] = "Enquiry - Trash";
		$data["main_title"] = "Enquiry Trash";

		$data["view_page"] = "enquiry/enquiry_template";
		$data["email_template"] = "enquiry/trash";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];

		$this->load->model("enquiry_model");
		$this->load->model("remark");

		$data["enquiries"] = $this->enquiry_model->only_trashed()->get_all();

		$data["enquiries_count"] = $this->enquiry_model->count_rows();
		$data["unread_enquiries"] = $this->enquiry_model->where("enquiry_status" , "0")->count_rows(); 
		$data["deleted_enquiries"] = $this->enquiry_model->only_trashed()->count_rows();
		$data["remark_draft"] = $this->remark->where("status" , "0")->count_rows();

		$this->template->theme($data);
	}

	function delete($id = NULL){
		$this->load->model("enquiry_model");
		if($id != NULL){
			if($this->enquiry_model->where("id" , $id)->delete()){
				redirect("enquiry");
			}else{
				redirect("enquiry");
			}
		}else{
			redirect("enquiry");
		}

	}


	function restore($id = NULL){
		$this->load->model("enquiry_model");
		if($id != NULL){

			if($this->enquiry_model->where("id" , $id)->restore()){
				redirect("enquiry/trash");
			}else{
				redirect("enquiry/trash");
			}

		}else{
			redirect("enquiry");
		}

	}


	function view($id = NULL){
		if($id != NULL){

			$data["title"] = "Enquiry";
			

			$data["view_page"] = "enquiry/enquiry_template";
			$data["email_template"] = "enquiry/enquiry_view";
			$data["page_javascript"] = [];
			$data["page_css"] = [];
			$data["page_font"] = [];

			
			$this->load->model("enquiry_model");
			$this->load->model("remark");

			$data["enquiry"] = $this->enquiry_model->where("id" , $id)->get();

			$data["main_title"] = "Enquiry From ".ucfirst($data["enquiry"]->email);

			if($this->enquiry_model->where("id" , $id)->count_rows() > 0){
				$data["enquiries_count"] = $this->enquiry_model->count_rows();
				$data["unread_enquiries"] = $this->enquiry_model->where("enquiry_status" , "0")->count_rows(); 
				$data["deleted_enquiries"] = $this->enquiry_model->only_trashed()->count_rows();
				$data["remark_draft"] = $this->remark->where("status" , "0")->count_rows();
				
				$this->enquiry_model->update(array("enquiry_status" => "1" ) , array("id" => $id ));
				$this->template->theme($data);
				
			}else{
				redirect("enquiry");
			}
		}else{
			redirect("enquiry");
		}
	}



	function remark(){

		$data["title"] = "Enquiry - Remark";
		$data["main_title"] = "Remarks";

		$data["view_page"] = "enquiry/enquiry_template";
		$data["email_template"] = "enquiry/enquiry_remark";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];

		$this->load->model("enquiry_model");
		$this->load->model("remark");

		$data["enquiries"] = $this->enquiry_model->get_all();

		$data["enquiries_count"] = $this->enquiry_model->count_rows();
		$data["unread_enquiries"] = $this->enquiry_model->where("enquiry_status" , "0")->count_rows(); 
		$data["deleted_enquiries"] = $this->enquiry_model->only_trashed()->count_rows();
		$data["remark_draft"] = $this->remark->where("status" , "0")->count_rows();


		$remarks = $this->remark->where("status" , "1")->get_all();

		$remark_detail = array();
		$i = 0;
		if($this->remark->where("status" , "1")->count_rows() > 0){
			foreach ($remarks as $remark) {
				$remark_detail[$i] = array(
					'id' => $remark->id,
					'enquiry_id' => $remark->enquiry_id,
					'name' => $this->getEnquiry($remark->enquiry_id)->name,
					'email' => $this->getEnquiry($remark->enquiry_id)->email,
					'course' => $remark->course_recommended,
					'date' => $remark->created_at ,
				);
				$i++;
			}
		}
		

		$data["remark_details"] = $remark_detail;

		$this->template->theme($data);

	}

	function draft(){


		$data["title"] = "Enquiry - Draft";
		$data["main_title"] = "Remark Draft";

		$data["view_page"] = "enquiry/enquiry_template";
		$data["email_template"] = "enquiry/draft";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];

		$this->load->model("enquiry_model");
		$this->load->model("remark");

		$data["enquiries"] = $this->enquiry_model->get_all();

		$data["enquiries_count"] = $this->enquiry_model->count_rows();
		$data["unread_enquiries"] = $this->enquiry_model->where("enquiry_status" , "0")->count_rows(); 
		$data["deleted_enquiries"] = $this->enquiry_model->only_trashed()->count_rows();
		$data["remark_draft"] = $this->remark->where("status" , "0")->count_rows();


		$remarks = $this->remark->where("status" , "0")->get_all();

		$remark_detail = array();
		$i = 0;
		// echo "<script> alert('".sizeof($remark_detail)."')</script>";

		if($this->remark->where("status" , "0")->count_rows() > 0){
			foreach ($remarks as $remark) {
				$remark_detail[$i] = array(
					'id' => $remark->id,
					'enquiry_id' => $remark->enquiry_id,
					'name' => $this->getEnquiry($remark->enquiry_id)->name,
					'email' => $this->getEnquiry($remark->enquiry_id)->email,
					'course' => $remark->course_recommended,
					'date' => $remark->created_at ,
				);
				$i++;
			}
		}
		

		$data["remark_details"] = $remark_detail;

		$this->template->theme($data);

	}

	function getEnquiry($id){
		$this->load->model("enquiry_model");
		return $this->enquiry_model->where("id" , $id)->with_trashed()->get();
	}

	function remark_send($id = NULL){

		if($id == NULL){
			redirect("enquiry");
		}

		$data["title"] = "Enquiry - Remark";
		$data["main_title"] = "Send Remark";

		$data["view_page"] = "enquiry/enquiry_template";
		$data["email_template"] = "enquiry/remark_send";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];

		$data["enquiry_id"] = $id ;

		$this->load->model('student/student_course');

		$data["student_courses"] = $this->student_course->get_all();

		$this->load->model("enquiry_model");
		$this->load->model("remark");

		$data["enquiries"] = $this->enquiry_model->get_all();

		$data["enquiries_count"] = $this->enquiry_model->count_rows();
		$data["unread_enquiries"] = $this->enquiry_model->where("enquiry_status" , "0")->count_rows(); 
		$data["deleted_enquiries"] = $this->enquiry_model->only_trashed()->count_rows();
		$data["remark_draft"] = $this->remark->where("status" , "0")->count_rows();


		$this->form_validation->set_rules('course_recommended', 'Username', 'required');
		$this->form_validation->set_rules('time_preferred', 'Username', 'required');
		$this->form_validation->set_rules('remark_result', 'Username', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->theme($data);
		}else{
			
			$remark_info["course_recommended"] = $this->input->post("course_recommended");
			$remark_info["time_preferred"] = $this->input->post("time_preferred");
			$remark_info["remark"] = $this->input->post("remark_result");
			$remark_info["enquiry_id"] = $id;

			$user = $this->ion_auth->user()->row();
		
			$remark_info["counsellor_id"] = $user->id;

			$enquser = $this->enquiry_model->where("id" , $id)->get();

			$remarkinfo = $this->remark->insert($remark_info);

			if($remarkinfo != NULL){
				
				// $this->load->library('email');

				// $this->email->from('noreply@aptech.com', 'Aptech Lekki Ajah');
				// $this->email->to($enquser->email);

				//$this->email->subject('');
				$message = 'The Course Reccomended For You Is '.$remark_info["course_recommended"];

				$this->enquiry_model->update(array("enquiry_status" => "2") , array("id"=>$id));

				$email_result = $this->send_mail($enquser->email , "Aptech" , $message );//$this->email->send();

				if($email_result){
					//enqury to 3
					$this->remark->update(array("status" => "1") , array("id"=>$remarkinfo));
					//remark to 1
				}

			}

			redirect("enquiry");


		}

		

	}


	function delete_draft($id){
		$this->load->model("remark");
		if($id != NULL){
			if($this->remark->where("id" , $id)->delete()){
				redirect("enquiry/draft");
			}else{
				redirect("enquiry/draft");
			}
		}else{
			redirect("enquiry/draft");
		}
	}

	function delete_remark($id){
		$this->load->model("remark");
		if($id != NULL){
			if($this->remark->where("id" , $id)->delete()){
				redirect("enquiry/remark");
			}else{
				redirect("enquiry/remark");
			}
		}else{
			redirect("enquiry/remark");
		}
	}

	function resend_draft($id){

		if($id != NULL){

			
			$this->load->model("enquiry_model");
			$this->load->model("remark");

			$remark_id = $id;

			$getremark = $this->remark->where("id" , $remark_id)->get();
			$enquser = $this->enquiry_model->where("id" , $getremark->enquiry_id)->get();

			//eNQUIRY uSER

			// $this->email->from('noreply@aptech.com', 'Aptech Lekki Ajah');
			// $this->email->to($enquser->email);

			// $this->email->subject('Aptech');

			$message ='The Course Reccomended For You Is '.$getremark->course_recommended;
			$email_result = $this->send_mail($enquser->email , "Aptech" , $message );

			if($email_result){
				//enqury to 3
				$this->remark->update(array("status" => "1") , array("id"=>$id));
				redirect("enquiry/draft");
				//remark to 1
			}else{
				redirect("enquiry/draft");
			}

		}else{
			redirect("enquiry/draft");
		}
	}




	function send_mail( $to , $subject , $message){
		
		$this->load->library('email');
		// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
			<title>' . html_escape($subject) . '</title>
			<style type="text/css">
				body {
					font-family: Arial, Verdana, Helvetica, sans-serif;
					font-size: 16px;
				}
			</style>
		</head>
		<body>
		' . $message . '
		</body>
		</html>';
		// Also, for getting full html you may use the following internal method:
		//$body = $this->email->full_html($subject, $message);
		$body ='

			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
			<title>'. html_escape($subject) .'</title>
			</head>
			<body style="margin:0px; background: #f8f8f8; ">
			<div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
			<div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
				<table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
				<tbody>
					<tr>
					<td style="vertical-align: top; padding-bottom:30px;" align="center"><a href="javascript:void(0)" target="_blank">
						<img src="'.base_url().'public/assets/images/logos/bulkit-logo-lemonade.png" alt=""></a> </td>
					</tr>
				</tbody>
				</table>
				<div style="padding: 40px; background: #fff;">
				<table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
					<tbody>
					<tr>
						<td>
							' . $message . ' 
						</td>
					</tr>
					</tbody>
				</table>
				</div>
				<div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
				<p> Powered by Themedesigner.in <br>
					<a href="javascript: void(0);" style="color: #b2b2b5; text-decoration: underline;">Unsubscribe</a> </p>
				</div>
			</div>
			</div>
			</body>
			</html>

		
		';

		$result = $this->email
			->from('noreply@aptech.com')
			->reply_to('noreply@aptech.com')    // Optional, an account where a human being reads.
			->to($to)
			->subject($subject)
			->message($body)
			->send();

		if($result){
			return TRUE;
		}else{
			return FALSE;
		}

	}


}

