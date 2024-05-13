<?php
/* for each deals with arrays and have a two syntax, 
the first is indexed array, the second is assoative array
*/


// syntax 1
$countries = ["Qatar","Egypet","Jordan","Saudi","UAE"];
foreach($countries as $country){
    echo "<option>".$country."</option>";
}

echo "<br>";
echo "<br>";

//syntax 2
$countries = 
["Qa"   =>  "Qatar",
"Eg"   =>  "Egypet",
"Jo"   =>  "Jordan",
"Sa"   =>  "Saudi",
"UA"   =>  "UAE"];

foreach($countries as $key => $country){
    echo "<option>".$key."    => ".$country."</option>";
}