<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enquiry_model extends MY_Model{
    public $table = 'enquiry';

    public function __construct(){
        parent::__construct();
        $this->soft_deletes = TRUE;
    }

}
