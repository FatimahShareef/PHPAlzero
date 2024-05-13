<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="text" name="username"/>
    <input type="password" name="password"/>
    <input type="submit" name="submit" />

</form>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Good you are using post"; 
    echo $_SERVER['REQUEST_METHOD']; //post
    echo $_REQUEST['username']; //username

}else{
    echo "you cant brouse the bage directley ";
}
?>