<?php
$numbers = array_fill(5,6,1); // array_fill(index, number, value)
$multi_dim_array = array_fill(5,10,array("osama","zayad","mohammed"));
echo "<pre>";
print_r($numbers);
echo "</pre>";


echo "<pre>";
print_r($multi_dim_array);
echo "</pre>";