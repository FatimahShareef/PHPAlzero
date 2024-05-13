<?php
    $heading          = "PHP Variables";
    $age              = 32;
    $first_name       = "Omar";
    $last_name        = "Ahmad";
?>
<html> 
<title><?php echo $heading; ?></title>
<body>
    <?php
        echo "<h1 class = \"testing\">Heading</h1>";
    ?>
    <?php echo "the name is " . $first_name; 
    $fullname = $first_name." ".$last_name;
    echo "\n";
    echo $fullname;
    ?>

</body>    

</html>
