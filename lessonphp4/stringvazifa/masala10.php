<?php
$url = "https://kun.uz/50487176";
$index = strrpos($url,"/");
$str = substr($url,$index+1);
echo $str;