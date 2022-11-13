<?php

class signupController{

    private $user_name;
    private $user_lastname;
    private $user_email;
    private $user_password;
    private $user_password_repeat;

    public function __construct($user_name, $user_lastname,$user_email, $user_password, $user_password_repeat)
    {
        $this->user_name = $user_name;
        $this->user_lastname = $user_lastname;
        $this->user_email = $user_email;
        $this->user_password = $user_password;
        $this->user_password_repeat = $user_password_repeat;
    }

    private function emptyInput(){
        $result;

        if( empty($this->user_name) || empty($this->user_lastname) || empty($this->user_email) || empty($this->user_password) || empty($this->user_password_repeat)){
                $result = false;
            } else{
                $result = true;
            }

            return $result;
    }

    private function passwordMatch(){
        $result;

        if( $this->user_password!= $this->user_password_repeat ){
            $result = false;
    } else {  
        $result = true;
    }
    return $result;
    }
    
    private function invalidEmail(){
        $result;

        if(!filter_var($this->user_email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{ 
            $result = true;
        }

        return $result;
    }
}

