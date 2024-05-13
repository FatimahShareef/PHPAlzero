<?php
$num1 = 10;
$num2 = 10;
$ticket_price = 450;

echo "<br>";

if ($num1 > $num2) {
    echo "number 1 greater than number2 ". $num1;
} elseif($num1 == $num2){
    echo "number1 = number2 , the number is ". $num1;

} 

else{
    echo $num2;
}

echo "<br>";
echo "<br>";

if($ticket_price >400 && $ticket_price <500){
    echo "Your Ticket Price Is ".$ticket_price . " USD You Have 5 % discount";

}
elseif($ticket_price >=500){
    echo "Your Ticket Price Is ".$ticket_price . " USD You Have 20 % discount";

}

else{
    echo "Sorry you cant get discount";

}
?>