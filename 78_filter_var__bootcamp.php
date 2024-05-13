<?php


/*
Validating data = Determine if the data is in proper form.

Sanitizing data = Remove any illegal character from the data.



The filter_var() function both validate and sanitize data.

The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:

The variable you want to check
The type of check to use



*/
/*
FILTER_NULL_ON_FAILURE	any FILTER_VALIDATE_*	Returns null for unrecognized values.
https://elzero.org/


FILTER_FLAG_PATH_REQUIRED	FILTER_VALIDATE_URL	Requires the URL to contain a path part.
https://elzero.org/category


FILTER_FLAG_QUERY_REQUIRED	FILTER_VALIDATE_URL	Requires the URL to contain a query string.
https://elzero.org/?id=10


*/


$var = array(True,1,"yes","faatimah","No"); // True, "on","yes",1,"TRUE","1","True";

foreach ($var as $v){
    var_dump(filter_var($v,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE));
    echo "<br>";

}


// filter valdiate url

$url = array("https://elzero.org","www.fatimah89.com",
"https://elzero.org/category","https://elzero.org/?id=10");

foreach ($url as $v){
    var_dump(filter_var($v,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE));
    echo "<br>";

}

$url2 = "https://elzero.org/?id=100";
var_dump(filter_var($url2,FILTER_VALIDATE_URL,["flags" =>
FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED
]));

echo "<br>";

$ip4 = "192.168.2.1";
var_dump(filter_var($ip4,FILTER_VALIDATE_IP,FILTER_NULL_ON_FAILURE));

echo "<br>";

$ip6 = "2001:0db8:85a3:0042:1000:8a2e:0370:7334";
var_dump(filter_var($ip6,FILTER_VALIDATE_IP,["flags" =>
FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6  |FILTER_NULL_ON_FAILURE
] ));
echo "<br>";


$mac = "00-B0-D0-63-C2-26";
var_dump(filter_var($mac,FILTER_VALIDATE_MAC));