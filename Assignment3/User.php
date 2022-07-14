<?php

class User {
private $username;
private $password;
private $name;

function user(){}
function __construct(array $userinfo){
    $this->name = $userinfo[2];
    $this->password = $userinfo[1];
    $this->username = $userinfo[0];
    }

function getUsername() : string{
    return $this->username;
}
function getPassword() : string{
    return $this->password;
}
function getName() : string{
    return $this->name;
}

function toString(){
    echo "$this->username, $this->password, $this->name";
}
}
?>