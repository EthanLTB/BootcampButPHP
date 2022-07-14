<?php
require_once "User.php";

class ValidationService {

function validate(array $users, array $validationInfo){
    foreach($users as $user){
        $username = strtolower($user->getUsername());
        $userpass = strtolower($user->getPassword());
        if ($validationInfo[0] == $username && $validationInfo[1] == $userpass){
           return $user;
        }
    }
return NULL;
}
}
?>