<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Student_fee extends MY_Model{
    public $table = 'student_fee';

    public function __construct(){
        parent::__construct();
        $this->soft_deletes = TRUE;
    }

}
