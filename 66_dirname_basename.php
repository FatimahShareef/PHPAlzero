<?php
// dirname ---> must take a path (folder)

echo dirname('C:\xampp\htdocs\w3school\fatimah')."<br>";

// echo __file__
// echo __dir__
// echo __dir__

// basename --> to get the file name, we can remove the extension by using suffex

echo dirname(__file__);

include_once("fatimah/Osama/test.php");
include dirname(__file__)."/../test/test.php";
include __DIR__."/../test/test.php";

include __DIR__."/../test/test.php";

include dirname(__file__,2)."/test/test.php";
/*
echo '<br>' . basename(__file__);
echo '<br>' . basename(__file__,'.php'); // remove extension 
*/

if(basename(__file__, '.php') === 'dir_base')
{
    echo 'good file is ready';
}
