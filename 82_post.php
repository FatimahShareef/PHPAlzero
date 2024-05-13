<?php

$admins = array("Osama","Hassan","Sayed");
$username= $_POST['username'];
/*
echo "your name is: " . $_GET['username'];
echo " ,your password is: " . $_GET['password'];
*/
if($_SERVER['REQUEST_METHOD'] == 'POST'){

//echo "you send the data with ".$_SERVER['REQUEST_METHOD']." Request ";

    if(in_array($username,$admins)){

        echo "welocme ".$username." to control panel";
    }
    else{
        echo "sorry this username  undefined in our database ".$username." please try again";

    }
}
else {
    echo 'Sorry you cant browse this page directly';
}


