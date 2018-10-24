<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_course extends MY_Model{
    public $table = 'student_course';

    public function __construct()
	{
		parent::__construct();
	}

}
