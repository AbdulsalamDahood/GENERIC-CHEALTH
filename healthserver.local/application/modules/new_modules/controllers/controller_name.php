<?php
class Controller_name extends MX_Controller 
{

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->load->model('mdl_name');
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin())
		{
			
		}else {
			redirect('login', 'refresh');
		}


	}

	function index(){

	}

}