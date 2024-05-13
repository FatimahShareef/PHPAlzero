<?php
$main_color = '#FFF'; //main color
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $main_color = $_POST['color'];
    setcookie('Background',$main_color,time()+3600,'/'); 

    // to delete the cookie
    //    setcookie('Background',,time()-3600,'/'); // delete name and use time()-time

    
}

if(isset($_COOKIE['Background'])){
    $body = $_COOKIE['Background'];
}
else {
    $body = $main_color;


}

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";



?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>MODIFY COOKIES</title>
    </head>
    <body style="background-color: <?php echo $body;?>">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="color" name="color" />
        <input type="submit" value="choose" />

    </form>
    </body>
</html>