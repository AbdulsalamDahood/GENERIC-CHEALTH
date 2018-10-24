<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		//$this->load->model('welcome_model');
		// $this->load->library('alert');
		// $this->load->helper('alert/alert');
		// $this->load->library('breadcrumbs/breadcrumbs');
	}

	public function index(){
		$this->load->view('welcome_message2');
	}

	// public function index()
	// {
	// 	//$this->load->view('welcome_message');
	// 	// $list = Welcome_model::all();
	// 	// echo "<pre>";
	// 	// print_r($list[0]);
	// 	// echo "</pre>";
			


	// 		// load Breadcrumbs
		

	// 	// add breadcrumbs
	// 	$this->breadcrumbs->push('Home', '/');
	// 	$this->breadcrumbs->push('Login', '/auth/login');
	// 	$this->breadcrumbs->push('Page', '/section/page');

	// 	// $this->advancecache->write($data, 'cached-name');
	// 	// $this->advancecache->delete_all();

	// 	// unshift crumb
	// 	//$this->breadcrumbs->unshift('Home', '/rr');

	// 	// output
	// 	echo $this->breadcrumbs->show();

	// 	// Alert will show after redirect
	// 	$this->alert->set('alert-danger', 'Orang asing dilarang masuk!');
	// 	$this->alert->set('alert-success', 'Orang asing dilarang masuk!');
	// 	$this->load->view('welcome_message');

	// }

}
