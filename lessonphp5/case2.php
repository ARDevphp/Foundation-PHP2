<?php
$n = 67;
$onlik = $n / 10;
$birlik = $n % 10;
$onlik = floor($onlik);

switch ($onlik) {
    case 1:
    {
        echo "O'n ";
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
    case 10:
    {
        echo "Yuz ";
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