<?php
/**
*@copyright Copyright (c) 2013 mrhieusd
*/
class GuesController extends AppController {
	/**
	* index
	*/
	function beforeFilter() {
        $this->pageTitle = 'Gues';
        $this->layout = 'template';
        return parent::beforeFilter();
    }
	public function index() {
		
	}
}	
?>