<?php declare(strict_types=1); // strict requirement

function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  echo $a;



  function myFamily( $lastname,...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }
  
  $a = myFamily("Doe", "Jane", "John", "Joey");
  echo $a;

?>
<?php 

function addNumbers(int $a, int $b) {
  return $a + $b;
}
//echo addNumbers(5, "5 days");
echo addNumbers(5, 41);

// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>