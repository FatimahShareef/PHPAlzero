<?php
session_start();
if (isset($_SESSION["user"])){
echo 'welcome '.$_SESSION['user'].' you are admin '.'<br>';
print_r($_SESSION);
} else{
    echo 'you are not permitted  to see this page';
}