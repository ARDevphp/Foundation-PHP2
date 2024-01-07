<?php
$matn = ['an','mana','3','4'];
$array = ['aziz','saa','dsd','dsd'];
echo implode($array);//massiv elementlarini stringga aylantirib beradi elementlaridan so'z hosil qiladi
print_r(explode($matn,'aa'));//oddiy matnni massivga aylantirib beradi
print_r(array_combine($array,$matn));//ikta massivni qo'shishi uchun ishlatiladi birinchi massiv elementlariga ikkinchi massiv elementlari indexlanib qoladi
print_r(array_slice($array,1,2));//arraydagi belgilangan indexdan boshlab ko'rsatilgan uzunlik bo'yicha chiqaradi
$input = array("a", "b", "c", "d", "e");
$output = array_slice($input, 3, true);//massivni ko'rsatilgan elementni olib yingi orasidan yangi massivga joylaydi
print_r($input);//
print_r($output);//




