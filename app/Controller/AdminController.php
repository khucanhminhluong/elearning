<?php
/**
*@copyright Copyright (c) 2013 mrhieusd
*/
class AdminController extends AppController {
	
	public $uses = array('user');
	
	function beforeFilter() {
        $pageTitle = 'E-Learning';
        $this->layout = 'admin';
        return parent::beforeFilter();
    }

    public function img() {
    	//khong biet tai sao luon co log bao thieu adminController::img(), them vao cho k bao loi
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
		//title cho trang
		$pageTitle = "admin/students";
		$this->set(compact('pageTitle'));
		//end title cho trang
		
		//breadcrumb cho trang
		$page_breadcrumb = array();
		$page_breadcrumb['title'] = 'Students';
		$page_breadcrumb['direct'] = array('Home', 'Student');
		$this->set(compact('page_breadcrumb'));
		//end breadcrumb cho trang

		//lay du lieu tu database cho bang All students
		$all_students = array(
			'total' => $this->user->find("count", "UserId"),
			'data' => $this->user->find('all', array('limit' => 10))
			);
		$this->set(compact('all_students'));

		//lay du lieu tu database cho bang new students
		$new_students = array(
			'total' => $this->user->find("count", array(
				'conditions' => 'Username = \'luong\''
				))
			);
		$this->log($new_students);
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