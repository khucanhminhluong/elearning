<?php
/**
*@copyright Copyright (c) 2013 mrhieusd
*/
class AdminController extends AppController {
	
	public $uses = array('user', 'ip', 'config', 'student_history');
	
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

	}


	public function home() {
		//title cho trang
		$pageTitle = 'Home';
		$this->set(compact('pageTitle'));

		//sidebar
		$this->set('sidebar', array('home'));
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
		//sidebar
		$this->set('sidebar', array('user', 'teacher'));

		if (!isset($username)) {
			//title cho trang
			$pageTitle = __("admin/teachers");
			$this->set(compact('pageTitle'));
			//end title cho trang
			
			//breadcrumb cho trang
			$page_breadcrumb = array();
			$page_breadcrumb['title'] = __('Teachers');
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
		$this->set('sidebar', array('user', 'moderator'));

		if (!isset($username)) {

			//title cho trang
			$pageTitle = __("admin/moderators");
			$this->set(compact('pageTitle'));
			//end title cho trang
			
			//breadcrumb cho trang
			$page_breadcrumb = array();
			$page_breadcrumb['title'] = __('Moderators');
			$page_breadcrumb['direct'] = array('Home', 'Moderator');
			$this->set(compact('page_breadcrumb'));
			//end breadcrumb cho trang

			//lay du lieu tu database cho bang All moderators
			$all_moderators = array(
				'total' => $this->user->find("count", "UserId"),
				'data' => $this->user->find('all', array(
					'limit' => 10,
					'conditions' => array(
						'UserType' => '3'
						),
					))
				);
			$this->set(compact('all_moderators'));

		} else {
			$moderatorInfo = $this->user->find("all", array(
				'conditions' => array(
					'AND' => array(
						'UserName' => $username,
						'UserType' => '3'
						),						
					),
				))[0]['user'];

			//title cho trang
			$pageTitle = "moderator/" . $moderatorInfo['FullName'];
			$this->set(compact('pageTitle'));
			//end title cho trang
			
			//breadcrumb cho trang
			$page_breadcrumb = array();
			$page_breadcrumb['title'] = $moderatorInfo['FullName'];
			$page_breadcrumb['direct'] = array('Home', 'Moderator', $moderatorInfo['FullName']);
			$this->set(compact('page_breadcrumb'));
			//end breadcrumb cho trang

			
			$this->set('moderatorInfo', $moderatorInfo);
		}
	}

	public function payment() {
		//title cho trang
		$pageTitle = __('Payment Summary');
		$this->set(compact('pageTitle'));

		//breadcrumb cho trang
		$page_breadcrumb = array();
		$page_breadcrumb['title'] = __('Payment Summary');
		$page_breadcrumb['direct'] = array('Home', 'Payment');
		$this->set(compact('page_breadcrumb'));
		//end breadcrumb cho trang

		//sidebar
		$this->set('sidebar', array('payment'));

		//lay du lieu tu db 
		$transactions = array();
		$today = $this->student_history->find("all");
		$this->log($today);
	}

	public function config() {
		//title cho trang
		$pageTitle = __('System Properties');
		$this->set(compact('pageTitle'));

		//breadcrumb cho trang
		$page_breadcrumb = array();
		$page_breadcrumb['title'] = __('System Properties');
		$page_breadcrumb['direct'] = array('Home', 'Config');
		$this->set(compact('page_breadcrumb'));
		//end breadcrumb cho trang

		//sidebar
		$this->set('sidebar', array('config'));

		//lay du lieu tu db 
		$ip_addrs = $this->ip->find('all');
		$this->set(compact('ip_addrs'));

		$configs = $this->config->find('all');
		$this->set(compact('configs'));
	}
}	
?>