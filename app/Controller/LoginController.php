<?php
/**
*@copyright Copyright (c) 2013 mrhieusd
*/
App::uses('AppController', 'Controller');
class LoginController extends AppController {
	var $uses = array('User');
    function beforeFilter() {
   	 	$this->pageTitle = 'ajax';
   	 	$this->layout ='template';
	    return parent::beforeFilter();
	}
	public function index(){
		// $this->redirect(array('action' => 'login'));
	}

	public function login() {
		// $this->layout = 'login';
		// if ($this->request->is('post')) {
		// 	$this->Nhanvien->set($this->request->data);
  //           if($this->Nhanvien->valid_01()==TRUE){
  //               if ($this->Auth->login()) {
	 //           		return $this->redirect($this->Auth->redirect());
	 //        	}
	 //        	$error = 'Tài khoản hoặc mật khẩu chưa chính xác. Vui lòng nhập lại!';
  //           }else{
  //               $error = 'Tài khoản hoặc mật khẩu chưa được nhập. Vui lòng nhập lại!';
  //           } 	
	       		
	 //    }
	 //    if(isset($error)){
	 //    	$this->set('error',$error);
		// }
	}
	public function logout() {
	    // return $this->redirect($this->Auth->logout());
	}

}	
?>