<?php
session_start();
echo 'hello'. $_SESSION['username'] .'you are in room number five'.'<br>';
echo 'hello you faviour food is '. $_SESSION['favfood'] .'<br>';
echo '<a href="page2.php"> room number four </a>'.'<br>'; 

echo '<pre>';
print_r($_SESSION);
echo '</pre>'.'<br>';

echo '<a href="logoutSession.php"> exist </a>'; 