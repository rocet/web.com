<?php

class UserForm extends BaseForm
{
    public function isValidForLogin($accountType)
    {
        return $this->isValid($this->getAccountTypeValid($accountType) + array(
            "password" => "required"
        ));
    }
    
    public function isValidForRegist($accountType)
    {
        return $this->isValid($this->getAccountTypeValid($accountType, 0) + array(
            "password"              => "required|min:6",
            "password_confirmation" => "required|same:password"
        ));
    }

    public function isValidForRequest($accountType)
    {
        return $this->isValid($this->getAccountTypeValid($accountType));
    }

    public function isValidForReset($accountType)
    {
        return $this->isValid($this->getAccountTypeValid($accountType) + array(
            "password"              => "required|min:6",
            "password_confirmation" => "required|same:password",
            "token"                 => "required|exists:token,token"
        ));
    }

    public function isValidForRepassword()
    {
        return $this->isValid(array(
            "password"              => "required|min:6",
            "password_confirmation" => "required|same:password"
        ));
    }

    public function isValidForPerfinfo($accountType){
        return $this->isValid($this->getAccountTypeValid($accountType, 0));
    }

    protected function getAccountTypeValid($accountType, $exists = 1){
        $accountValid = array(
            "email"                 => "required|email|".($exists ? "exists" : "unique").":user,email",
            "phone"                 => "required|numeric|min:11|".($exists ? "exists" : "unique").":user,phone",
            "user_name"              => "required|min:5|".($exists ? "exists" : "unique").":user,username",
            "region"              => "required|numeric",
        );
        if( !is_array( $accountType ) ){
            return array('account' => $accountValid[$accountType]);
        } else{
            $return = array();
            foreach ($accountType as $value) {
                $return[$value] = $accountValid[$value];
            }
            return $return;
        }
    }
}