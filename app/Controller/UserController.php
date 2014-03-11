<?php
/**
*@copyright Copyright (c) 2013 mrhieusd
*/
class UsersController extends AppController {
	/**
	* index
	*/
	function beforeFilter() {
        $this->pageTitle = 'Home';
        $this->layout = 'template';
        $this->Auth->allow(array('index','sign_up'));
        return parent::beforeFilter();
    }
	public function index() {
        if($this->Auth->user()){            
            $UserType = $this->Auth->user('UserType');
            if($UserType == 1){
                $this->redirect(array('controller'=>'Student','action' => 'index'));
            }
            if($UserType == 2){
                $this->redirect(array('controller'=>'Teacher','action' => 'index'));
            }
        };
	}
	public function login() {
		$this->layout = 'default';
		//if already logged-in, redirect
        if($this->Session->check('Auth.User')){
            $this->redirect(array('action' => 'index'));      
        }        
        // if we get the post information, try to authenticate
        if ($this->request->is('post')) {
            $data = $this->request->data;
            if(!empty($data['User']['Username']) && !empty($data['User']['Password']) )
            {
                if ($this->Auth->login()) {
                    $UserType = NULL;
                    if($this->Auth->user()){            
                        $UserType = $this->Auth->user('UserType');
                        if($UserType == 1){
                            $this->redirect(array('controller'=>'Student','action' => 'index'));
                        }
                        if($UserType == 2){
                            $this->redirect(array('controller'=>'Teacher','action' => 'index'));
                        }
                    };
                } else {
                    $this->Session->setFlash($this->Auth->loginError);
                }
            }else{
                $this->Session->setFlash(__('Username or Password not empty'));
            }
        } 
	}
	public function sign_up() {
        $this->pageTitle = 'Sign up';
       if ($this->request->is('post')) {
            $data= $this->request->data;
            if($data['User']['TermsOfService'] == 1){
                $this->User->create();
                $birthday = $data['User']['Birthday']['year'].'-'.$data['User']['Birthday']['month'].'-'.$data['User']['Birthday']['day'];
                $data['User']['Birthday'] = $birthday;
                $data['User']['InitialPassword'] =  $data['User']['Password'];
                $data['User']['InitialCodeQuestion'] =  $data['User']['VerifyCodeQuestion'];
                $data['User']['InitialCodeAnswer'] =  $data['User']['VerifyCodeAnswer'];
                // debug($data);
                if ($this->User->save($data)) {
                    $this->Session->setFlash(__('The user has been created'));
                    $this->redirect(array('action' => 'login'));
                } else {
                    $this->Session->setFlash(__('The user could not be created. Please, try again.'));
                }   
            }else{
                $this->Session->setFlash(__('Please confirm terms of service'));
            }           
            
        }
		
	}
	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}
}	
?>