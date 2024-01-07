<?php
/**
 * Berilgan qiymat IP yoki IP emasligini aniqlang. Berilgan qiymat matn ko'rinishida.
 * "123.312.12.222" => IP emas
 * "123.212.12.222" => IP
 */
$ip = "123.212.25.222";

$ipXona1 = strstr($ip, ".", true);//123
$ipXonaIndex1 = strstr($ip, ".");//.212.12.222
$ipIndex1 = ltrim($ipXonaIndex1, ".");//212.12.222

$ipXona2 = strstr($ipIndex1, ".", true);//212
$ipXonaIndex2 = strstr($ipIndex1, ".",);//.12.222
$ipIndex2 = ltrim($ipXonaIndex2, ".");//12.222

$ipXona3 = strstr($ipIndex2, ".", true);//12
$ipXonaIndex3 = strstr($ipIndex2, ".");//.222

$ipXona4 = ltrim($ipXonaIndex3, ".");//222

$result = $ipXona1 <= 255 && $ipXona2 <= 255 && $ipXona3 <= 255 && $ipXona4 <= 255;

if (!$result) echo $ip . " => Ip emas";
else echo $ip . " => Ip";


