<?php
$numbers = array(1,2,3,4,10,15,30,7,8);
shuffle($numbers); // randomize the array
echo "<pre>";
print_r($numbers);
echo "</pre>";

$reversed_array = array_reverse($numbers); // reverse the array 
echo "<pre>";
print_r($reversed_array);
echo "</pre>";