<?php
// dirname(__file__) -->> get the current path
//echo dirname(__file__);
// file_put_contents
// is_writable
$file = 'C:\xampp\htdocs\w3school\fatimah.txt';

if(file_exists($file)){
    echo "Good, the file ['.$file.']  ' is exist";
    file_put_contents($file,'added with php file');
} else {
    echo "sorry, the file  ['.$file.']  is not exist but i created it by php ";
    file_put_contents($file,'created by php');


}

if(is_writable($file)){
    echo "Good, the file ['.$file.']  ' is writable";
    file_put_contents($file,'is writable');
} else {
    echo "sorry, the file  ['.$file.']  is not writable and i can\'t but i created it by php ";
    file_put_contents($file,'created by php');


}

