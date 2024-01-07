<?php
$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$str = rand(1,52);

echo str_shuffle(substr($data,$str,8));