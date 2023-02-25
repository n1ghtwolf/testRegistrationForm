<?php
class Validator {

    public function validateEmail($email):bool
    {
        return strpos($email,'@'); //согласно задания
    }

    public function validatePassword($password, $passwordConfirmation):bool
    {
        return $password === $passwordConfirmation;
    }
}