<?php
    $word = " - Concatintion ";
    $homePage          = "PHP".$word;
    $heading           = "Welcome ".$word;
    $breif             = "This lesson about ".$word;

    $languages         = "<ul>";
    $languages         .= "<li> PHP </li>";
    $languages         .= "<li> CSS </li>";
    $languages         .= "<li >JS </li>";
    $languages         .= " <li> Java </li>";
    $languages         .= "</ul>"

?>
<html> 
<title><?php echo $homePage; ?></title>
<body>
    <h1><?php echo $heading ; ?></h1>
    <p><?php echo $breif ; ?></p>
    <P><?php 
    echo "Hello" . " ". "PHP ";
    echo 1 . " " . 2.5 ;
    ?></p>
<h2>I Love languages</h2>
<?php echo $languages ;
// Do you see me?
/** Clone kids */
?>
</body>    


</html>
