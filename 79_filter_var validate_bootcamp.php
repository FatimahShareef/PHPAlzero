<?php

$email = "fatoomshr97@gmail.com"; //check if elgible or not
var_dump(filter_var($email,FILTER_VALIDATE_EMAIL ,FILTER_NULL_ON_FAILURE ));
echo "<br>";


$int = "100"; //100 "100"
var_dump(filter_var($int,FILTER_VALIDATE_INT ,FILTER_NULL_ON_FAILURE ));
echo "<br>";


$int = "55"; //50,50.00 =>true, 100.00 => null
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    [
        "flags" => FILTER_NULL_ON_FAILURE,
        "options" => ["min_range" => 50, "max_range" =>80]
    ]
));
echo "<br>";

$float = "55.99"; //50,50.00 =>true
var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    [
        "flags" => FILTER_NULL_ON_FAILURE,
        "options" => ["min_range" => 50, "max_range" =>80]
    ]
));
echo "<br>";