<?php
$array = array("osama","ali","ahmad,","toqa","salem","saleem","osama","ali","ahmad,","toqa","salem","saleem","adam");

echo "<pre>";
$random_arr = array_unique($array);
print_r($random_arr);
echo "</pre>";