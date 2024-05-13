<?php

// cookie save the array in browser
// session save in server

session_start(); // start session or resume //permissons for users

$_SESSION['username'] = "osama";
$_SESSION['favfood']  ='Pizza';



echo '<a href="page2.php">Room number 2</a>';