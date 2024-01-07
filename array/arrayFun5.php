<?php

//list(); function array elementlarini list orqali o'zgaruchilarga ketma ketlik bilan olib beradi
$array = ['aqua','cola','pepsi','chay'];
list($a,$b,$c) = $array;
echo $a, $b,$c;

//range(); function berilgan argumenlarga qarab massiv hosil qiladi
//yani range(2,12); bersak 2dan 12gacha bo'lgan sonlardan massiv hosil qiladi
$a = (range(2,12));
print_r($a);
//3-argumentiga qiymat bersak o'sha soni karrasi bo'yicha massiv hosil qiladi
print_r(range(2,12,3));

//shuffle(); array elementlarni aralshtirib beradi
shuffle($a);
print_r($a);

//sort(); array elementlarini o'sish tartibida saralab beradi bunda indexlari
//aralashib ketadi elemantlar o'z indexlarini yo'qotadi va yangi indexs oladi
sort($a);
print_r($a);

//rsort(); array elementlarini kamayish tatibida saralaydi buda xam srot kabi
//indexlari aralashib ketadi
rsort($a);
print_r($a);

//asort() array_ni key indexlari aralashtirmasdan elemenlarni o'sish tartibida saralaydi
asort($a);
print_r($a);

//arsort(); array_ni index key larini aralashtirmasdan kamayish tartibida saralaydi
arsort($a);
print_r($a);

$array1 = ['fd'=>'salom','sa'=>'dam','as'=>'index'];
//ksort(); massiv key index bo'yicha o'sish tartibida saralaydi elementni saqlab qolgan holda
ksort($array1);
print_r($array1);

//krsort(); massiv key index bo'yicha kamayish tartibida saralaydi elementlar saqlab qolgan holda
krsort($array1);
print_r($array1);
