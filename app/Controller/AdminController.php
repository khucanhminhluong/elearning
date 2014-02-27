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

	public function index() {
		$pageTitle = 'Home';
		$this->set(compact('pageTitle'));
	}
}	
?>