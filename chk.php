<?php

session_start();

$admins = array("osama","ahmad","sayed","ali","hassan");

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $user =   $_POST['username'] ;
    
    if (in_array($user, $admins))
    {
    $_SESSION['user'] = $user;
    echo 'welcome '. $_SESSION['user'] .'you will be redirected to control panel area';

    header('REFRESH:5;URL =control.php');

} 
else{
    echo 'sorry you are not admin, and you are not permited to control panel area';
}
 
} 
else {
    echo 'you cant browse this page directly';
}