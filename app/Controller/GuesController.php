<?php
/**
*@copyright Copyright (c) 2013 mrhieusd
*/
class GuesController extends AppController {
	/**
	* index
	*/
	function beforeFilter() {
        $this->pageTitle = 'Home';
        $this->layout = 'template';
        return parent::beforeFilter();
    }
	public function index() {
		
	}
	public function login() {
		$this->layout = 'default';
	}
	public function logout() {
	    // return $this->redirect($this->Auth->logout());
	}
}	
?>