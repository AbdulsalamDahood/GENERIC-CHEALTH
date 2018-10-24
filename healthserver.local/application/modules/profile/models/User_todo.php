<?php

class User_todo extends MY_Model{
    public $table = 'user_todo';

    public function __construct()
	{
		parent::__construct();
		$this->soft_deletes = TRUE;
	}

}

