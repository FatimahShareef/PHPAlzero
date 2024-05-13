<?php

// local_host/courses/?id= 1 or local_host/courses/?id= 100 or local_host/courses/?id= 900
// we are using get to discrimmnation between id's


?>

<form action="80_control.php" method ="get">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" value="login">

</form>