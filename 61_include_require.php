<?php

include("global.php");// include another page multiple times, if inlcude anything, there is a warning

include_once("global.php"); // include another page only one time

require("global.php");  // if require anything, there is a wrong, programmers prefer to use require,
// it is the best practice


include_once("globals.php"); // include another page only one time

require_once("global.php");
echo "hello";


