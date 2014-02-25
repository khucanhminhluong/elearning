<?php
/**
 * @copyright  Copyright (c) 2013 Mrhieusd ALL RIGHTS RESERVED. 
 */
App::uses('AppModel', 'Model');
class Nhanvien extends AppModel {
    var $useTable = 'nhanvien';
    public $primaryKey = 'nv_ms';
	public $validate = array();
    function valid_01(){        
        $this->validate = array(       
            'nv_taiKhoan' => array(
                'required' => array(
                    'rule' => array('notEmpty'),
                    'message' => 'A username is required'
                )
            ),
            'nv_matKhau' => array(
                'notempty' => array(
                    'rule' => array('notEmpty'),
                    'message' => 'A password is required'
                ),
                'min' => array(
                    'rule' => array('minLength', 6),
                    'message' => '',
                ),
                'max' => array(
                    'rule' => array('maxLength', 32),
                    'message' => '',
                ),
                // 'password_rule' => array(
                //     'rule' => "/^[a-zA-Z]+[0-9]+[a-zA-Z0-9]*$|^[0-9]+[a-zA-Z]+[a-zA-Z0-9]*$/",
                //     'message' => ''
                // ),       
            )       
        );
        if($this->validates($this->validate)){
            return TRUE;
        }else {
            return FALSE; 
       }            
    }

}?>
