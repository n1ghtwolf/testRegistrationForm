<?php

class UserRepository {

    private $users = [
        ['id' => 1, 'name' => 'John Smith', 'email' => 'john.smith@example.com'],
        ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane.doe@example.com'],
        ['id' => 3, 'name' => 'Test', 'email' => 'test@example.com'],
        ['id' => 4, 'name' => 'temp', 'email' => 'temp@temp.temp']
    ];
    private $emails;

    public function __construct(){
        $this->emails = array_column($this->users,'email');
    }

    public function findByEmail($email):bool {
        return in_array($email,$this->emails);
    }
}