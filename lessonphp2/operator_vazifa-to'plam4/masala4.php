<?php
$a = 1;
$b = 31;
$c = 5;

echo (($a > $c AND $b < $c) OR ($a < $c AND $b > $c)) ? "C soni A va B sonlari orasida yotadi" : "C sino A va B sonlari orasida yotmaydi";