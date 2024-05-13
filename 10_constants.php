<?php
/*
syntax : define(name,value, case-intentive)
global
not define again

const == define

*/

$first_name = "osama";
echo $first_name."<br>";

define("FIRST_NAME","Osama",False);
echo FIRST_NAME;
echo "<br>";

define ("LAST_NAME","Mohammed");
define("SITE_STATUS","Open");

if(SITE_STATUS == "Open"){
    echo "<h3>   Open </h3>";
}
else {
    echo "Closed";
}

echo LAST_NAME;
echo "<br>";

echo PHP_INT_MAX;

echo __FILE__ . "<br>"; // magic constant
echo __DIR__ . "<br>"; // magic constant
echo __LINE__ ; // magic constant