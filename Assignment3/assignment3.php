<?php
require_once "User.php";
require "validationService.php";

$data = file('data.txt');
$users = [];
$validationService = new ValidationService();

foreach($data as $line){
    $newUser = new User(explode(",", $line));
    array_push($users, $newUser);
}

$validationInfo = NULL;
$loggedInUser = NULL;
$loginattempts = 0;
while($loginattempts < 5){

    $validationInfo = takeUserCredentials();

   $loggedInUser = $validationService->validate($users, $validationInfo);

  if($loggedInUser != NULL){
    echo "Welcome {$loggedInUser->getName()}";
    break;
  }else{
    echo "Invalid login, try again:\n";
    $loginattempts++;
  }
}
if($loggedInUser == NULL){

    echo "Too many login attempts, you are now locked out.";
}

function takeUserCredentials() : array{
    $credentials = [];
    $username = readline("Enter your email:\n");
    $password = readline("Enter your password:");
    array_push($credentials, strtolower($username), strtolower($password));
   
    return $credentials;
}
?>