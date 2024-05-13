<?php

$admins = array("Osama","Hassan","Sayed");
$username= $_GET['username'];
$password= $_GET['password'];
/*
echo "your name is: " . $_GET['username'];
echo " ,your password is: " . $_GET['password'];
*/

if(in_array($username,$admins)){

    echo "welocme ".$username." to control panel";
}else{
    echo "sorry this username  undefined in our database ".$username." please try again";

}