<?php

$array = [
    'Assalomu' => 'Abdulxamid',
    'salom1' => 'Abdulaziz',
    'salom2'=> 'Abdullox',
    'salom3' => 'Muhammdaziz'
];

foreach ($array as $item => $value) {
    if ($item == 'salom2') {
        echo $array[$item] . "\n";
    }
}