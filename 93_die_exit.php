<?php

// exit(message) 
$name = 5;
echo $name;

//exit(); // out from the excuction or //exit or //die

$file = "osama.txt";
$handle = fopen($file,"r")
or die("unable to find $file"); // or exit('unable to find $file')
 

// 