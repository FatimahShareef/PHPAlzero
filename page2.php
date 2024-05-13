<?php

// resume the session

session_start();    
echo 'your name is '.$_SESSION['username'].'<br>';
echo 'your faviourt food is '.$_SESSION['favfood'].'<br>';
echo '<a href="page3.php">page number 3</a>';