<?php
$n = 67;

function speech($n)
{
    $son1 = $n / 10 % 10;
    $son2 = $n % 10;
    switch ($son1) {
        case 1: {
            echo "O'n ";
            break;
        }
        case 2:{
            echo "Yigirma ";
            break;
        }
        case 3:{
            echo "O'ttiz ";
            break;
        }
        case 4: {
            echo "Qiriq ";
            break;
        }
        case 5: {
            echo "Ellik ";
            break;
        }
        case 6: {
            echo "Oltmish ";
            break;
        }
        case 7: {
            echo "Yetmish ";
            break;
        }
        case 8: {
            echo "Sakson ";
            break;
        }
        case 9: {
            echo "To'qson ";
            break;
        }
        case 10: {
            echo "Yuz";
            break;
        }
    }
    switch ($son2) {
        case 1: {
            echo "bir";
            break;
        }
        case 2: {
            echo "ikki";
            break;
        }
        case 3: {
            echo "uch";
            break;
        }
        case 4: {
            echo "to'rt";
            break;
        }
        case 5: {
            echo "bash";
            break;
        }
        case 6: {
            echo "olti";
            break;
        }
        case 7: {
            echo "yetti";
            break;
        }
        case 8: {
            echo "sakkiz";
            break;
        }
        case 9: {
            echo "to'qqiz";
            break;
        }
    }
}
speech($n);

