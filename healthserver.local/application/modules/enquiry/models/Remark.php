<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Remark extends MY_Model{
    pUBLIC $table = 'remark';

    public function __construct(){
        parent::__construct();
        $this->soft_deletes = TRUE;
    }

}
