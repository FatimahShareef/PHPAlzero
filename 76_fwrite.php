<?php
$file_handle = fopen("fatimah.txt",'r+');
$read = fread($file_handle, filesize('fatimah.txt'));
echo 'Orginal text here is clear by the user <br>' . $read;
$write = fwrite($file_handle,'Hello the world');