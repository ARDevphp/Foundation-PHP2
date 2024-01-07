<?php

$kitoblar = array(
    'taragediya' => array(
        array(
            'nomi' => 'O\'tkan kunlar',
            'janr' => 'tragediya',
            'bet' => '200'
        ),
        array(
            'nomi' => 'Stiv Jobs',
            'janr' => 'tragediya',
            'bet' => '200'
        ),
        array(
            'nomi' => 'Hamsa',
            'janr' => 'tragediya',
            'bet' => '580'
        )
    ),
    'komediya' => array(
        array(
            'nomi' => 'Molxona',
            'janr' => 'komediya',
            'bet' => '150'
        ),
        array(
            'nomi' => 'Daftar hoshiyasidan bitiklar',
            'janr' => 'komediya',
            'bet' => '140'
        )
    )
);

foreach ($kitoblar as $key => $value) {
    foreach ($value as $item => $value1) {
        foreach ($value1 as $item1 => $value2) {
            echo $item1 . $value2;
        }
        echo "<br>";
    }
}
