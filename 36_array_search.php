<?php

$salaries = array(
    "Ahmad"     => "100",
    "Ali"       => "200",
    "Ammar"     => "ammar",
    "Ayman"     => 1245,
    "Aya"       => 712,
    "Amal"      => 496,
);

$search_salary = array_search("ammar",$salaries,true); //true and false for identical type
echo $salaries[$search_salary] . "<br>";

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = in_array('green', $array); 
echo $array[$key]."<br>";

$key_exist = array_key_exists("Ahmad",$salaries);
echo $key_exist;
