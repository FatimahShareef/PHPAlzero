<?php

// indexed array
// associative array
// multidiminsional array


$workers = array("ahmad","omar","hamza","fatimah","nader","jalal",7,[1,2,3,5,8,9]);
$workers[]="qamar";
$workers[15]="alaa";

echo "<pre>";
print_r($workers) ;
echo "</pre>";

echo $workers[2];
echo "<br>".$workers[7][2];

foreach ($workers as $worker){
    echo "<li>" . $worker . "</li>";
}

echo count($workers);