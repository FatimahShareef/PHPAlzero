<?PHP

$name = 'fatimah';
$GLOBALS['name1'] = 'name'."<br>";


function testFunc(){
    echo $GLOBALS['name1']."<br>";
    echo $GLOBALS ['name'];
    echo $GLOBALS['name1'];
}


testFunc();
echo $name."<br>";



echo $name.'<br>';
