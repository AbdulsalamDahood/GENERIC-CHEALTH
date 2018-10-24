<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends MX_Controller 
{

	private $upload_error;
	private $file_name;

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->load->module('template');


	}

	function index(){
		
		$data["title"] = "Profile";
		$data["view_page"] = "profile/view";
		$data["page_javascript"] = [];
		$data["page_css"] = [];
		$data["page_font"] = [];
		$this->load->module("auth");


		$user = $this->ion_auth->user()->row();
		
		if($this->do_upload("image")){
			$this->auth->edit_user( $user->id ,$this->file_name );

		}else{
			$this->auth->edit_user( $user->id );
		}

		$this->template->theme($data);	
	}

	function updatetheme($color = NULL)
	{
		
		if($color == NULL){
			$color = $this->input->post("colour");
		}

		if($color == NULL){
			redirect("profile");
		}

		$color = str_replace("_" , "-" , $color);
		
		$word = explode("-",$color);
		$size = sizeof($word);

		$this->load->model("profile/user_meta");
		$user = $this->ion_auth->user()->row();
		$user_meta = $this->user_meta->where('user_id', $user->id )->get();
		$template_color = (json_decode($user_meta->template_theme));

		if($word[0] == "header"){
			$template_color->header = $color;
		}else if($word[0] == "logo"){
			$template_color->logo = $color;
		}else{
			$template_color->side = $color."-sidebar-color";
		}
		$template_encode = json_encode($template_color);
		$this->user_meta->where('user_id',$user->id)->update(array("template_theme" => $template_encode));

		redirect("profile");

		
	}



	public function do_upload($name = "image")
	{
		$config['upload_path']          = './public/uploads/';
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