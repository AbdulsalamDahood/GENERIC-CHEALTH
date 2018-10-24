<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Student extends CI_Model
    {

        public $table = "student";

        public function __construct(){
            parent::__construct();
        }
        
    }
    