<?php
$n = 4;
if ($n >= 1 && $n <= 7) {
    switch ($n) {
        case 1:
        {
            echo "Dushanba \n";
            break;
        }
        case 2:
        {
            echo "Seshanba \n";
            break;
        }
        case 3:
        {
            echo "Chorshanba \n";
            break;
        }
        case 4:
        {
            echo "Payshanba \n";
            break;
        }
        case 5:
        {
            echo "Juma \n";
            break;
        }
        case 6:
        {
            echo "Shanba \n";
            break;
        }
        case 7:
        {
            echo "Yakshanba \n";
            break;
        }
    }
} else {
    echo "(1-7) oralig'ida hafta kunlarini kiriting \n";
}