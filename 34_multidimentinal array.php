<?php

$diet= array(
    array("apple","banana","milk"),
    array("meat","bread","apricot"),
    array("fish","apple"),
    array("egg","rice"),
    array("tea"),
    array(
        array(1,2,3,4,5)
    )
);

echo "<pre>";
print_r($diet);
echo "</pre>";

echo $diet[1][2]."<br>";
echo $diet[5][0][1]."<br>";



$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";



  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
      for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
      }
    echo "</ul>";
  }


  $food= array(
    "day one"   => array("apple","banana","milk"),
    "day two"   => array("meat","bread","apricot"),
    "day three" => array("fish","apple"),
    "day four"  => array("egg","rice"),
    "day five"  => array("tea"),
    "day seven" => array(
        "salt"  => "10%",
        "suger" => "20%"
    )
);

echo $food["day five"][0];