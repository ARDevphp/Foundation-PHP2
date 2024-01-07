<?php
$a = array('a', 'b', 'c', 'd');
$a1 = array('а', 'б', 'д', 'с');
$s = 'kin2sdsd';
$a2 = str_replace($a, $a1, $s);
echo $a2;
//print_r($a1);
