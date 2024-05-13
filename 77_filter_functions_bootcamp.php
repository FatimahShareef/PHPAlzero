<?php

//filter_list()   filter_id()     filter_var()



/*
Many web applications receive external input. External input/data can be:

User input from a form
Cookies
Web services data
Server variables
Database query results

You should always validate external data!
Invalid submitted data can lead to security problems and break your webpage!
By using PHP filters you can be sure your application gets the correct input!

*/

echo "<pre>";
print_r(filter_list());
echo "</pre>";

echo "<pre>";
print_r(filter_id("boolean")); //258
echo "</pre>";


$val =True; // 1 //"on" // "yes"

if(filter_var($val,FILTER_VALIDATE_BOOL)){ // we can use if(filter_var($var,258))
    echo "This is true";
} else {
    echo "This is false";

}


