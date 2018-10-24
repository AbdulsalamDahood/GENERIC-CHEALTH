<?php
class Login extends MX_Controller 
{

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
$this->load->module('auth');
		
	}

	function index()
	{

		if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin() )
		{
			//redirect them to the dashboard page
			//redirect('auth/login', 'refresh');
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$data['users'] = $this->ion_auth->users()->result();
			foreach ($data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}

			redirect('dashboard', $data);
		}	
		else
		{
			

			$this->auth->login();
			//$this->authenticate();
		}

	}

}
