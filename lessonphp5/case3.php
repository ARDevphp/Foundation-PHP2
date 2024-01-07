<?php
//1-999 999
$n = 203322;
$yuzminlik = $n / 100000 % 100000;
$onmilik = $n / 10000 % 10;
$minglik = $n / 1000 % 10;
$yuzlik = $n / 100 % 10;
$onlik = $n / 10 % 10;
$birlik = $n % 10;

switch ($yuzminlik) {
    case 1:
    {
        echo $minglik == 0 ? "bir yuz ming ":"bir yuz ";
        break;
    }
    case 2:
    {
        echo $minglik == 0 ? "ikki yuz ming ":"ikki yuz ";
        break;
    }
    case 3:
    {
        echo $minglik == 0 ? "Uch yuz ming ": "uch yuz ";
        break;
    }
    case 4:
    {
        echo $minglik == 0 ? "to'rt yuz ming " : "to'rt yuz ";
        break;
    }
    case 5:
    {
        echo $minglik == 0 ? "besh yuz ming ":"besh yuz ";
        break;
    }
    case 6:
    {
        echo $minglik == 0 ? "olti yuz ming ":"oltti yuz ";
        break;
    }
    case 7:
    {
        echo $minglik == 0 ? "yetti yuz " :"yetti yuz ";
        break;
    }
    case 8:
    {
        echo $minglik == 0 ? "sakkiz yuz ming ":"sakkiz yuz ";
        break;
    }
    case 9:
    {
        echo $minglik == 0 ? "to'qqiz yuz " : "to'qqiz yuz ";
        break;
    }

}

switch ($onmilik) {
    case 1:
    {
        echo $minglik == 0 ? "o ming " : "o ";
        break;
    }
    case 2:
    {
        echo $minglik == 0 ? "yigirma ming " : "yigirma ";
        break;
    }
    case 3:
    {
        echo $minglik == 0 ? "o'ttiz ming " : "o'ttiz ";
        break;
    }
    case 4:
    {
        echo $minglik == 0 ? "qiriq ming " : "qiriq ";
        break;
    }
    case 5:
    {
        echo $minglik == 0 ? "ellik ming " : "ellik ";
        break;
    }
    case 6:
    {
        echo $minglik == 0 ? "oltmish ming " : "oltmish ";
        break;
    }
    case 7:
    {
        echo $minglik == 0 ? "yetmish ming " : "yetmush ";
        break;
    }
    case 8:
    {
        echo $minglik == 0 ? "sakson ming " : "sakson ";
        break;
    }
    case 9:
    {
        echo $minglik == 0 ? "to'qson ming " : "to'qson ";
        break;
    }
}
switch ($minglik) {
    case 1:
    {
        echo "bir ming ";
        break;
    }
    case 2:
    {
        echo "ikki ming ";
        break;
    }
    case 3:
    {
        echo "uch ming ";
        break;
    }
    case 4:
    {
        echo "to'rt ming ";
        break;
    }
    case 5:
    {
        echo "besh ming ";
        break;
    }
    case 6:
    {
        echo "olti ming ";
        break;
    }
    case 7:
    {
        echo "yetti ming ";
        break;
    }
    case 8:
    {
        echo "sakkiz ming ";
        break;
    }
    case 9:
    {
        echo "to'qqiz ming ";
        break;
    }
}
switch ($yuzlik) {
    case 1:
    {
        echo "bir yuz ";
        break;
    }
    case 2:
    {
        echo "ikki yuz ";
        break;
    }
    case 3:
    {
        echo "uch yuz ";
        break;
    }
    case 4:
    {
        echo "to'rt yuz ";
        break;
    }
    case 5:
    {
        echo "besh yuz ";
        break;
    }
    case 6:
    {
        echo "olti yuz ";
        break;
    }
    case 7:
    {
        echo "yetti yuz ";
        break;
    }
    case 8:
    {
        echo "sakkiz yuz ";
        break;
    }
    case 9:
    {
        echo "to'qqiz yuz ";
        break;
    }

}
switch ($onlik) {
    case 1:
    {
        echo "O ";
        break;
    }
    case 2:
    {
        echo "Yigirma ";
        break;
    }
    case 3:
    {
        echo "O'ttiz ";
        break;
    }
    case 4:
    {
        echo "Qiriq ";
        break;
    }
    case 5:
    {
        echo "Ellik ";
        break;
    }
    case 6:
    {
        echo "Oltmish ";
        break;
    }
    case 7:
    {
        echo "Yetmish ";
        break;
    }
    case 8:
    {
        echo "Sakson ";
        break;
    }
    case 9:
    {
        echo "To'qson ";
        break;
    }
}
switch ($birlik) {
    case 1:
    {
        echo "bir \n";
        break;
    }
    case 2:
    {
        echo "ikki \n";
        break;
    }
    case 3:
    {
        echo "uch \n";
        break;
    }
    case 4:
    {
        echo "to'rt \n";
        break;
    }
    case 5:
    {
        echo "besh \n";
        break;
    }
    case 6:
    {
        echo "olti \n";
        break;
    }
    case 7:
    {
        echo "yetti \n";
        break;
    }
    case 8:
    {
        echo "sakkiz \n";
        break;
    }
    case 9:
    {
        echo "to'qqiz \n";
        break;
    }
}