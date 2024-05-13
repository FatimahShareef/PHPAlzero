<?php


// server address
//echo $_SERVER['SERVER_ADDR'];
/*
echo $_SERVER['SERVER_NAME'];

if ($_SERVER['SERVER_NAME'] === "localhost"){
    echo 'your ID Address';
}

*/
echo $_SERVER['QUERY_STRING']; // http://localhost/w3school/80_predefined_funtion_server.php?name=osama&skills=app



//echo $_SERVER['HTTP_REFERER'] // which is the page you are come from?!

echo $_SERVER['HTTP_REFERER'] ;
echo '<br>'.'your port is: ' .  $_SERVER['SERVER_PORT'].'<br>';

?>

<a  href="<?php echo $_SERVER['PHP_SELF'] ; ?>"> click </a>

