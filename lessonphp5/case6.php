<?php
/**
 * 6-masala.
 * Ikkita burj vaqtlarini aniqlovchi butun son berilgan.
 * D - kun. M - oy;
 * Misol: D=2; M=12; - bu degani 12->dekabr, 2->kun, 2-dekabr
 * Berilgan sana qaysi burjga kirishi aniqlansin.
 *
 * BUZOQ BURJI \n (20.04-20.05)
 * EGIZAKLAR BURJI (21.05-21.06)
 * QISQICHBAQA BURJI (22.06-22.07)
 * ARSLON BURJI (23.07-23.08)
 * SUMBULA BURJI (24.08-23.09)
 * TAROZI BURJI (24.09-23.10)
 * CHAYON BURJI (24.10-22.11)
 * O’Q OTAR BURJI (23.11-22.12)
 * TOG’ ECHKISI BURJI (22.12-20.01)
 * QOVG’A BURJI (21.01-19.02)
 * BALIQ BURJI (20.02-20.03)
 * QO'Y BURJI ()21.03-19.04
 */
$day = 20;
$month = 4;

$buzoq = ($day >= 20 && $month == 4) || ($day <= 20 && $month == 5);
$egizak = ($day >= 21 && $month == 5) || ($day <= 21 && $month == 6);
$qisqichbaqa = ($day >= 22 && $month == 6) || ($day <= 22 && $month == 7);
$arslon = ($day >= 23 && $month == 7) || ($day <= 23 && $month == 8);
$sumbula = ($day >= 24 && $month == 8) || ($day <= 23 && $month == 9);
$torozi = ($day >= 24 && $month == 9) || ($day <= 23 && $month == 10);
$chayon = ($day >= 24 && $month == 10) || ($day <= 22 && $month == 11);
$oq_otar = ($day >= 23 && $month == 11) || ($day <= 22 && $month == 12);
$tog = ($day >= 22 && $month == 12) || ($day <= 20 && $month == 1);
$qovga = ($day >= 21 && $month == 01) || ($day <= 19 && $month == 02);
$baliq = ($day >= 20 && $month == 02) || ($day <= 20 && $month == 03);
$qoy = ($day >= 21 && $month >= 03) || ($day <= 19 && $month == 04);

switch ($month) {
    case 1:
    {
        if ($tog) echo "TOG’ ECHKISI BURJI \n";
        else if ($qovga) echo "QOVG’A BURJI \n";
        break;
    }
    case 2:
    {
        if ($qovga) echo "QOVG’A BURJI \n";
        else if ($baliq) echo "BALIQ BURJI \n";
        break;
    }
    case 3:
    {
        if ($baliq) echo "BALIQ BURJI \n";
        else if ($qoy) echo "QO'Y BURJI \n";
        break;
    }
    case 4:
    {
        if ($qoy) echo "QO'Y BURJI \n";
        else if ($buzoq) echo "BUZOQ BURJI \n";
        break;
    }
    case 5:
    {
        if ($buzoq) echo "BUZOQ BURJI \n";
        else if ($egizak) echo "EGIZAKLAR BURJI \n";
        break;
    }
    case 6:
    {
        if ($egizak) echo "EGIZAKLAR BURJI \n";
        else if ($qisqichbaqa) echo "QISQICHBAQA BURJI \n";
        break;
    }
    case 7:
    {
        if ($qisqichbaqa) echo "QISQICHBAQA BURJI \n";
        else if ($arslon) echo "ARSLON BURJI \n";
        break;
    }
    case 8:
    {
        if ($arslon) echo "ARSLON BURJI \n";
        else if ($sumbula) echo "SUMBULA BURJI \n";
        break;
    }
    case 9:
    {
        if ($sumbula) echo "SUMBULA BURJI \n";
        else if ($torozi) echo "TAROZI BURJI \n";
        break;
    }
    case 10:
    {
        if ($torozi) echo "TAROZI BURJI \n";
        else if ($chayon) echo "CHAYON BURJI \n";
        break;
    }
    case 11:
    {
        if ($chayon) echo "CHAYON BURJI \n";
        else if ($oq_otar) echo "O’Q OTAR BURJI \n";
        break;
    }
    case 12:
    {
        if ($oq_otar) echo "O’Q OTAR BURJI \n";
        else if ($tog) echo "TOG’ ECHKISI BURJI \n";
        break;
    }
}