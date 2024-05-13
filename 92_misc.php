<?php 
//sleep   usleep  time_sleep_until(time()+5)

$name = 'osama';

sleep(5); //delay for 5 seconds //

echo $name; 
usleep(5); //delay for 5 micro seconds //
echo $name; 


function checkfile(){
    if(file_exists('fatimah.txt')){
        echo ' the file is exist';
    }
    else{
        sleep(5);
        echo '';
    }
}
checkfile();