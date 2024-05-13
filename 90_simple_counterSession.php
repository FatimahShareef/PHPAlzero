<?php

if (!isset($_SESSION))
  {
    session_start();
  }
  $_SESSION['name'] = 'osama';

include 'c.php';

echo '<a href="about.php">about</a>'.'<br>';
echo '<a href="test.php">Test</a>';

?>