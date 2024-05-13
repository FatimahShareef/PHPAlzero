<?php

// resume the session

session_start();    
echo 'hello you are in room 3, your name is '.$_SESSION['username'].'<br>';
echo 'your faviourt food is '.$_SESSION['favfood'].'<br>';

echo '<a href="page4.php"> kitchen </a>';