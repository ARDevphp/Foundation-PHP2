<?php
//5-masala
$amal = "+";
$a = 5;
$b = 9;

switch ($amal) {
    case "+":
    {
        echo $a + $b . "\n";
        break;
    }
    case "-":{
        echo $a - $b . "\n";
        break;
    }
    case "*": {
        echo $a * $b . "\n";
        break;
    }
    case "/": {
        echo $a / $b . "\n";
        break;
    }
    default: {
        echo "Amalardan birini tanlang \n";
    }
}