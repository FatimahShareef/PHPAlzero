<?php
//fopen("fatimah.txt",'r'); // 'r' read, 'w' write, 
$open_file = fopen("fatimah.txt",'a+'); // 'r' read, 'w' write, 

$content = fread($open_file,5); // fread($open_file,filesize('fatimah.txt')) --> full size of file
echo $content;