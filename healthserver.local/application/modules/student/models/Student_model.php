<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Student_model extends MY_Model
    {

        public $table = "student";

        public function __construct(){
            parent::__construct();
            $this->soft_deletes = TRUE;
        }
        
    }
    