<?php
$var1 = "I Love PHP";  // string
$var2 = 100;            // integer
$var3 = True;            // boolean
$var4 = 15.5;           //float AKA (as known as ) double
$var5= array(1,2,8,"o"); //array
$var6 = null;

class Book{
    function Book(){
        $this ->genre = "Adventure";
    }
}

$var7 = new Book(); // object

$var8=fopen('fatimah.txt','r') ;//resource

echo "<h2>Get type</h2>";
echo gettype($var1)."<br>";
echo gettype($var2)."<br>";
echo gettype($var3)."<br>";
echo gettype($var4)."<br>";
echo gettype($var5)."<br>";
echo gettype($var6)."<br>";
echo gettype($var7)."<br>";
echo gettype($var8)."<br>";

echo "<h2>Variable dump</h2>"."<br>";
echo var_dump($var1)."<br>";
echo var_dump($var2)."<br>";
echo var_dump($var3)."<br>";
echo var_dump($var4)."<br>";
echo var_dump($var5)."<br>";
echo var_dump($var6)."<br>";
echo var_dump($var7)."<br>";
echo var_dump($var8)."<br>";
