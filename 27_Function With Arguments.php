<?php
function familyName($year,$fname = "User"){
    echo "firstName is : ". $fname." you born in ".$year."<br>";

}

familyName(1988,"ahmad") ;

function SalaryO($startYear,$lastYear){
    echo "<select name='years'>";

    for($i=$startYear;$startYear<$lastYear;++$startYear)
    {
        echo '<option>'.$startYear.'</option>';
        if ($startYear == $lastYear-1){
            echo '<option>'.$lastYear.'</option>';

        }
    }
        echo "</select>";

}

SalaryO(2000,2010);


function add_five(&$value) {
  $value += 5;
}
echo"hello";
$num = 2;
add_five($num);
echo $num."<br>";


function add_five1($value) {
    $value += 5;
    echo $value;
  }
add_five1(2);

