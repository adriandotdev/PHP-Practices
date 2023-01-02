<?php

class User
{

    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetEmail()
    {
        return $this->email;
    }

    public function GetPassword()
    {
        return $this->password;
    }
}

class Employee extends User
{

    private $jobRole;

    public function __construct($name, $email, $password, $jobRole)
    {
        parent::__construct($name, $email, $password);
        $this->jobRole = $jobRole;
    }

    public function GetJobRole()
    {
        return $this->jobRole;
    }
}

$newUser = new User('Nads', 'user1@gmail.com', 'passoword');

echo $newUser->GetName() . '<br>';
var_dump($newUser);
