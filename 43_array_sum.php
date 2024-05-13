<?php
$numbers = array(1,2,3,4,10,15,30,7,8);
$sumV = array_sum($numbers); // done with index and associatve


echo "<pre>";
print_r($sumV);
echo "</pre>";

$b = array("a" => 1.2, "b" => "ahmad", "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";