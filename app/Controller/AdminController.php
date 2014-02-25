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
        // 認証設定
        $this->pageTitle = 'E-Learning';
        $this->layout = 'Adm_template';
        return parent::beforeFilter();
    }
	public function index() {
		$this->pageTitle = 'Admin';
	}
}	
?>