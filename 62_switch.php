<?php
$number = 3;

echo "<br>";
switch($number){
    case 1:
    case 0:
    case -1:
        echo ++$number;
        echo "case 1";

        break;
    case 5:
    case 3:
    case 2:
        echo $number;
        echo "case 2 or 5 or 3";
        break;
    default:
    echo 99;

}