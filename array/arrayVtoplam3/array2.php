<?php
//2-masala
$text = "Ассалому алекум";
function translate($textFun)
{
    $textLotin = ["S'", 'Ch', 'Sh', "Sh'", 'Yo', 'Ya', 'Yu', "I'",
        'A', 'B', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'V', 'X', 'Y', 'Z',
        "s'", 'ch', 'sh', "sh'", "'", 'yo', 'ya', 'yu', "i'",
        'a', 'b', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'v', 'x', 'y', 'z',
    ];

    $textKiril = ['Ц', 'Ч', 'Ш', 'Щ', 'Ё', 'Я', 'Ю', 'Ы',
        'А', 'Б', 'Д', 'Э', 'Ф', 'Г', 'Х', 'И', 'Ж', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Қ', 'Р', 'С', 'Т', 'В', 'Х', 'Й', 'З',
        'ц', 'ч', 'ш', 'щ', 'ь', 'ё', 'я', 'ю', 'ы',
        'а', 'б', 'д', 'э', 'ф', 'г', 'х', 'и', 'ж', 'к', 'л', 'м', 'н', 'о', 'п', 'қ', 'р', 'с', 'т', 'в', 'х', 'й', 'з',
    ];

    $lotin = str_replace($textLotin, $textKiril, $textFun);
    $kiril = str_replace($textKiril, $textLotin, $textFun);

    if ($textFun == $kiril) {
        echo $lotin;
    }

    if ($textFun == $lotin) {
        echo $kiril;
    }
}

translate($text);
