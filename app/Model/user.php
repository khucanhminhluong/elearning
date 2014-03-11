<?php
class User extends AppModel {
    public $name = "User";
    public $useTable = "users";
    public $primaryKey = 'UserId';

    public $validate = array(
        'username' => array(
            'required' => true,
            'rule' => 'alphaNumeric',
            'message' => 'A username is required'
        ),
        'password' => array(
            'required' => true,
            'rule' => 'alphaNumeric',
            'message' => 'A password is required'
        )
    );

    public function getUserInfo($username) {
        $user = $this->find('first', array(
            'conditions' => array(
                'User.Username' => $username,
            ),
            'fields' => array(
                'UserId',
                'Username',
                'Password',
                'InitialPassword',
                'UserType',
                'FullName',
                'Birthday',
                'VerifyCodeQuestion',
                'InitialCodeQuestion',
                'VerifyCodeAnswer',
                'InitialCodeAnswer',
                'Gender',
                'Address',
                'Phone',
                'Email',
                'ImageProfile',
                'IsOnline',
                'created',
                'modified',
                'Status',
                'Violated',
                'BankInfo',
                'CreditCard',
            )
        ));
        return $user['User'];
    }

    public function getUserId($username) {
        $buff = $this->find('first', array(
            'conditions' => array(
                'User.Username' => $username,
                ),
            'fields' => 'UserId',
            ));
        return $buff['user']['UserId'];
    }
}
?>