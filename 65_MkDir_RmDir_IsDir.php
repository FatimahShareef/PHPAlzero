<?php
//Mkdir --> make directory ==  create folder
// RmDir --> remove directory == 
// Is_Dir


/*
$name = 'fatimah/Osama';
Rmdir($name);
Rmdir('fatimah/Test');

mkdir($name);
mkdir(('fatimah/Test'));

echo 'the directory' .$name . 'is created';
*/
$name = 'fatimah/Osama';

if(is_dir($name)){
    Rmdir($name);
}
else{
    mkdir($name);

}
