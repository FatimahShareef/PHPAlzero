<?php

// explode mean bomb, convert from array to string

$str="Hello I love PHPandSQL";

$arr=explode(" ",$str,5);  // explode(, ,  limit)

echo "<pre>";
print_r($arr) ;
echo "</pre>";

$arr1=explode(" ",$str,-1);
echo "<pre>";
print_r($arr1) ;
echo "</pre>";


$str3="widget,clock,header,footer";
$arr2=explode(",",$str3);
echo "<pre>";
print_r($arr2) ;
echo "</pre>";

for ($i=0;$i<count($arr2); $i++){
echo "<h2>";
echo "/css/".$arr2[$i].".css"."<br>";
echo "</h2>";
}