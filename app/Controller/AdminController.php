<?php
/**
*@copyright Copyright (c) 2013 mrhieusd
*/
class AdminController extends AppController {
	/**
	* index
	*/
	var $users = array('User');
	function beforeFilter() {
        $pageTitle = 'E-Learning';
        $this->layout = 'admin';
        return parent::beforeFilter();
    }

   	public function test() {

	}

	public function index() {
		$pageTitle = 'Home';
		$this->set(compact('pageTitle'));
	}


	public function home() {

	}

	public function lesson() {

	}

	public function file() {

	}

	public function student() {

	}

	public function teacher() {

	}

	public function moderator() {
		
	}

	public function payment() {

	}

	public function config() {

	}
}	
?>