<?php

//(@include("17_error_control_operator1.php")) or die ("this file is not here");
//(@include("operator1.php")) or die ("this file is not here");

$server = "localhost";
$user = "Osama";
$pass = "HelloPHP";
$db = "OurDatabase";

@mysqli_connect($server, $user, $pass, $db) or die("there something wrong with your connection");
