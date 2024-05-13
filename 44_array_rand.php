<?php
$array = array("osama","ali","ahmad,","toqa","salem","saleem");

echo "<pre>";
$random_arr = array_rand($array,3);
echo $array[$random_arr[0]]."<br>";
echo $array[$random_arr[1]]."<br>";
echo $array[$random_arr[2]]."<br>";

echo "</pre>";