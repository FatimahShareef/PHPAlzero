<?php
$numbers = array(
    "Html"      => 10,
    "Jave"      => 2,
    "Kotlin"    => 3,
     "Ajax"     => 5,
     "Xammp"    => 80,
);
/*
krsort — Sort an array by key in descending order
ksort — Sort an array by key in ascending order
arsort — Sort an array in descending order and maintain index association
asort — Sort an array in ascending order and maintain index association
*/
echo "asort"."<br>";

asort($numbers); // sort values not keys
echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "arsort"."<br>";

arsort($numbers); // sort values not keys
echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "ksort"."<br>";

ksort($numbers); // sort values not keys
echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "asort"."<br>";

krsort($numbers); // sort values not keys
echo "<pre>";
print_r($numbers);
echo "</pre>";

