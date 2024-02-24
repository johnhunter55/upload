<?php

class SignupContr {

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    private function emptyInput() {
        $result; 
        if (empty( $this->uid) || empty($this->pwd) || $this->pwdRepeat || $this->email) {
            $result = false;
        }
        else{
            $result = true;
        } 
        return $result;
    }

}