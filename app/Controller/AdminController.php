<?php
/**
*@copyright Copyright (c) 2013 mrhieusd
*/
class AdminController extends AppController {
	
	public $uses = array('user');
	
	function beforeFilter() {
        $pageTitle = 'E-Learning';
        $this->layout = 'admin';
        $status = array('Deleted', 'Active', 'Pending', 'Blocked', 'Denied');
		$status_label = array('default', 'success', 'info', 'warning', 'danger');
		$this->set(compact('status'));
		$this->set(compact('status_label'));
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
		$this->set('sidebar', array('user', 'student'));

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
				'data' => $this->user->find('all', array(
					'limit' => 10,
					'conditions' => array(
						'UserType' => 1
						),
					))
				);
			$this->set(compact('all_students'));

			//lay du lieu tu database cho bang new students
			$new_students = array(
				'total' => $this->user->find("count", array(
					'conditions' => array(
						'AND' => array(
							'created >' => date('Y-m-d',strtotime("-1 days")),
							'UserType' => '1'
							)
						)
					)),
				'data' => $this->user->find("all", array(
					'conditions' => array(
						'AND' => array(
							'created >' => date('Y-m-d',strtotime("-1 days")),
							'UserType' => '1'
							)
						)
					))
				);
			$this->set(compact('new_students'));

		} else {
			$studentInfo = $this->user->find("all", array(
				'conditions' => array(
					'AND' => array(
						'UserName' => $username,
						'UserType' => '1'
						),						
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

			
			$this->set('studentInfo', $studentInfo);
		}
	} 

	public function teacher($username = null) {
		$this->set('sidebar', array('user', 'teacher'));

		if (!isset($username)) {
			//title cho trang
			$pageTitle = "admin/teachers";
			$this->set(compact('pageTitle'));
			//end title cho trang
			
			//breadcrumb cho trang
			$page_breadcrumb = array();
			$page_breadcrumb['title'] = 'Teachers';
			$page_breadcrumb['direct'] = array('Home', 'Teacher');
			$this->set(compact('page_breadcrumb'));
			//end breadcrumb cho trang

			//lay du lieu tu database cho bang All teacher
			$all_teachers = array(
				'total' => $this->user->find("count", "UserId"),
				'data' => $this->user->find('all', array(
					'limit' => 10,
					'conditions' => array(
						'UserType' => 2
						),
					))
				);
			$this->set(compact('all_teachers'));

			//lay du lieu tu database cho bang new teacher
			$new_teachers = array(
				'total' => $this->user->find("count", array(
					'conditions' => array(
						'AND' => array(
							'created >' => date('Y-m-d',strtotime("-1 days")),
							'UserType' => '2'
							)
						)
					)),
				'data' => $this->user->find("all", array(
					'conditions' => array(
						'AND' => array(
							'created >' => date('Y-m-d',strtotime("-1 days")),
							'UserType' => '2'
							)
						)
					))
				);
			$this->set(compact('new_teachers'));

		} else {
			$teacherInfo = $this->user->find("all", array(
				'conditions' => array(
					'AND' => array(
						'UserName' => $username,
						'UserType' => '2'
						),					
					),
				))[0]['user'];

			//title cho trang
			$pageTitle = "teacher/" . $teacherInfo['FullName'];
			$this->set(compact('pageTitle'));
			//end title cho trang
			
			//breadcrumb cho trang
			$page_breadcrumb = array();
			$page_breadcrumb['title'] = $teacherInfo['FullName'];
			$page_breadcrumb['direct'] = array('Home', 'Teacher', $teacherInfo['FullName']);
			$this->set(compact('page_breadcrumb'));
			//end breadcrumb cho trang

			
			$this->set('teacherInfo', $teacherInfo);
		}
	}

	public function moderator() {
		
	}

	public function payment() {

	}

	public function config() {

	}
}	
?>