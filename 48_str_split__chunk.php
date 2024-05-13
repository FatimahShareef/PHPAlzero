<?php

$str="acb abb af abv av adfr adfgh";
chunk_split($str,2,"-");
echo "<pre>";

print_r($str);
echo "</pre>";

$str = "Hello Friend lalala";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

echo "<pre>";
print_r($arr1);
print_r($arr2);
echo "</pre>";