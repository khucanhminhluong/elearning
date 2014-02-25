<?php
/**
*@copyright Copyright (c) 2013 mrhieusd
*/
class TeacherController extends AppController {
	/**
	* index
	*/
	var $uses = array('Nhacungcap','Nhanvien');
	function beforeFilter() {
        $this->pageTitle = 'Quản lý nhà cung cấp';
        $this->layout = 'template';
        return parent::beforeFilter();
    }
	public function index() {
		$this->pageTitle = 'Teacher';
	}

}	
?>