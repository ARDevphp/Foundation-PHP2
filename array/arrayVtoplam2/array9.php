<?php
//9-masala
$matn = "2019-12-03 12:35:43";

function matn($matn): void
{
    $result = explode(" ", $matn);

    list($matn1, $matn2) = $result;

    $result1 = explode('-', $matn1);
    $result2 = explode(':', $matn2);

    $array = array_merge($result1, $result2);
    $arrKun = null;
    $arrSoat = null;
    $monthY = null;

    for ($i = 0; $i < count($array); $i++) {
        if ($i == 1) {
            $month = $array[1];
            switch ($month) {
                case 1:
                {
                    $monthY = '-yanvar, ';
                    break;
                }
                case 2:
                {
                    $monthY = '-fevral, ';
                    break;
                }
                case 3:
                {
                    $monthY = '-mart, ';
                    break;
                }
                case 4:
                {
                    $monthY = '-aprel, ';
                    break;
                }
                case 5:
                {
                    $monthY = '-may, ';
                    break;
                }
                case 6:
                {
                    $monthY = '-iyun, ';
                    break;
                }
                case 7:
                {
                    $monthY = '-iyul, ';
                    break;
                }
                case 8:
                {
                    $monthY = '-avgust, ';
                    break;
                }
                case 9:
                {
                    $monthY = '-sentabr, ';
                    break;
                }
                case 10:
                {
                    $monthY = '-oktaber, ';
                    break;
                }
                case 11:
                {
                    $monthY = '-nayabr, ';
                    break;
                }
                case 12:
                {
                    $monthY = '-dekabr, ';
                    break;
                }
            }
        }
        if ($i == 0 || $i == 2) {
            $arrKun = $array[2] . $monthY . $array[0] . '-yil,';
        }
        if ($i == 3 || $i == 4 || $i == 5) {
            $arrSoat = 'soat ' . $array[3] . ' dan ' . $array[4] .
                " daqiqayu " . $array[5] . " soniya o'tdi";
        }
    }
    echo $array [0] = $arrKun;
    echo $array [1] = $arrSoat;
}

matn($matn);