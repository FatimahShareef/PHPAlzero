<?php
//snatitize >> check if in true form or not
$email = "o@n   T   n ..sa ll oqj"; //check if elgible or not
var_dump(filter_var($email,FILTER_SANITIZE_EMAIL ));
echo "<br>";


$int = "100+100  LLL OOOusiw 18chd 8889"; //check if elgible or not
var_dump(filter_var($int,FILTER_SANITIZE_NUMBER_INT )); //remove all digits or numbers except +/-
echo "<br>"; 


$float = "100+100,1000.55  LLL OOOusiw 18chd 8889"; //check if elgible or not
var_dump(filter_var($float,FILTER_SANITIZE_NUMBER_FLOAT ,[
"flags" =>FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND]
)); //remove all digits or numbers except +/-
echo "<br>"; 


$url = "https://          elzero.org"; //check if elgible or not
var_dump(filter_var($url,FILTER_SANITIZE_URL )); // Remove all characters except letters, digits and $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.

echo "<br>";