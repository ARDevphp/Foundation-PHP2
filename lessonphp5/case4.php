<?php

echo "Valyutanu tanlang: \n";
echo "1=>Yevro 2=>USD 3=>RUB 4=>KZT \n";

$vayula = 2;
$n = 2345133;
$yevro = 12589.49;
$doller = 11000;
$rubl = 126.52;
$tanga = 25.25;

switch ($vayula) {
    case 1:
    {
        $sum = $n / $vayula;
        echo $sum . "\n";
        break;
    }
    case 2:
    {
        $sum1 = $n / $doller;
        echo $sum1 . "\n";
        break;
    }
    case 3:
    {
        $sum2 = $n / $rubl;
        echo $sum2 . "\n";
        break;
    }
    case 4:
    {
        $sum3 = $n / $tanga;
        echo $sum3 . "\n";
        break;
    }
    default:{
        echo "Yuqoridagi valyutalardan birini tanlang \n";
    }

}