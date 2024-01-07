<?php
    $matn = "Assalom alukum!";

    $matnO = substr($matn, 0, 1);
    $matnA = substr($matn, -1, 1);

    if ($matnO != "O" && $matnO != "A") {
        echo $matn . "\n";
    } else {
        switch ($matn) {
            case $matnO == 'O':
            {
                if ($matnA == 'A' || $matnA == "a") {
                    echo "OleOleGoGo \n";
                } else {
                    echo "OleOle \n";
                }
                break;
            }
            case $matnO == 'A':
            {
                echo "GoGo .\n";
                break;
            }
        }
    }