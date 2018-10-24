<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Source extends MY_Model{
    public $table = 'source';

    public function __construct()
	{
		parent::__construct();
	}

}
