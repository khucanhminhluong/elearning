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

	public function student($username = null) {
		if (!isset($username)) {
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
					'conditions' => array(
						'AND' => array(
							'Created >' => date('Y-m-d',strtotime("-1 days")),
							'UserType' => '1'
							)
						)
					)),
				'data' => $this->user->find("all", array(
					'conditions' => array(
						'AND' => array(
							'Created >' => date('Y-m-d',strtotime("-1 days")),
							'UserType' => '1'
							)
						)
					))
				);
			$this->set(compact('new_students'));

		} else {
			$studentInfo = $this->user->find("all", array(
				'conditions' => array(
					'UserName' => $username,
					),
				))[0]['user'];

			//title cho trang
			$pageTitle = "student/" . $studentInfo['FullName'];
			$this->set(compact('pageTitle'));
			//end title cho trang
			
			//breadcrumb cho trang
			$page_breadcrumb = array();
			$page_breadcrumb['title'] = $studentInfo['FullName'];
			$page_breadcrumb['direct'] = array('Home', 'Student', $studentInfo['FullName']);
			$this->set(compact('page_breadcrumb'));
			//end breadcrumb cho trang

			

			$this->log($studentInfo);
			$this->set('studentInfo', $studentInfo);
		}
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