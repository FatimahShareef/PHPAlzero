<?php

session_start();


session_unset() ; // clear session

session_destroy() ; // delete session

print_r($_SESSION); 