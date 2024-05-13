<?php

function sayHello($user, $age = "Null", $skill = 5){
    $result = "Hello " .$user ." your age is " . $age . " your skill is " . $skill."<br>";
    return $result;
}

echo sayHello("Omar");


function getTicket($user, $age){
    $ticket = rand(5000,100000);
    //echo $ticket;
    if ($age >=30){
        $msg = " hello " . $user . " your age is ".$age."<br>";
        $msg .= " you are qulaified to get the ticket congrates " . "<br>";
        $msg .= "your ticket ID is [<span>" . $ticket . "/<span> ]"; 
    } else {
        $msg = "hello " . $user . " your age is ".$age."<br>";
        $msg .= " you are not qulaified to get the ticket congrates " . "<br>";
    }
    return $msg;
}

function makeFrame($element){
    $frame = "<div class='nice-frame'>";
    $frame .= $element;
    $frame .= "</div>";
    return $frame;
}





$id = getTicket("Osama",32);
$myFrame = makeFrame(getTicket("Fatimah",35));
?>

<html>
    <head>
        <title>Advanced function</title>
        <style>
            .nice-frame {
                padding: 10px;
                text-align: center;
                width: 400px;
                margin: 20px auto;
                border-radius: 10px;
                background-color: #EEE;
                border: 1px solid #CCC;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                line-height: 2;

            }

            .nice-frame span {
                font-weight: bold;
                color: #F00;
            }
        </style>
    </head>

    <body>
        <?php echo $id ?>
        <?php echo "<br>"; echo $myFrame;?>
    </body>
</html>
