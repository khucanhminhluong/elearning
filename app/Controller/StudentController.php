<?php
/**
*@copyright Copyright (c) 2013 mrhieusd
*/
class StudentController extends AppController {
	/**
	* index
	*/
	function beforeFilter() {
        $this->pageTitle = 'Student';
        $this->layout = 'template';
        return parent::beforeFilter();
    }
	public function index() {
		
	}
}	
?>