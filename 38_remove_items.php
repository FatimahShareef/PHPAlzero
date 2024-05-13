<?php
$numbers = array(1,2,3,4,10,15,30,7,8);

array_pop($numbers);  // remove the last element in the array
array_shift($numbers); // remove the first element in the array
echo "<pre>";
print_r($numbers);
echo "</pre>";