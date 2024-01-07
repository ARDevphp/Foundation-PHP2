<?php
$file = "/Users/sardordushamov/darslar/kurs/index.php";
$fileName = strrpos($file,"/");
$fileName++;
$sum = substr($file,$fileName);
echo $sum;

