<?php

//key must be a unique, duplicte value is valid 

$langs = array(
    1           => 5,
    "html"      => "60%",
    "html5"     => "10%",
    "css"       => "20%",
    "php"       => "90%",
    "python"    => "40%",
);

$langs["MySql"] = "75";

echo "<ul>";
foreach($langs as $lang => $key){
    echo "<li> ".$lang.",   the key is   ,". $key."</li>";
}


echo"</ul>";


echo "<pre>";
print_r($langs);

echo "</pre>";