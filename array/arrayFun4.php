<?php
/**array_intersect(); bu function ikta massivni solishtiradi va undagi bor elenetlarini olib beradi
 *array_diff(); functionsini teskaris
*/
$a = ['aziz','jamil','samil','sardor','shoyat1','shoyat1','shoyat1'];
$a1 = ['a'=>'aziz1','jamil','samil','sardor','shoyat'];
print_r(array_intersect($a,$a1));

//array_unique(); bu funtion massivdagi elementlarni unical qilib beradi yani bitta massivda elementlari
// ko'p marta takrorlangan bo'lsa bittadan olib beradi
print_r(array_unique($a));

//array_values(); massiv key indexlari string bo'lsa integer qilib beradi
$array = ['a'=>'aa','b'=>'bb','c'=>'cc','d'=>'dd'];
print_r(array_values($array));

//extract(); massiv key index bo'lsa elementlarini shunday o'zgaruvchilarga o'zlashtirib beradi
//$a2 = extract($array);
//echo $a2 .'$a' .'b';

//compact(); o'zgaruvchilar va ularning nomlaridan kelib chiqib massiv hosil qiladi
$acer = 'noutbook';
$hp = 'noutbook1';
print_r(compact('acer','hp'));

//array_keys(); bu function asatsativ array bo'lsa indexlarini olib beradi.
//function 3 tagacha argument qabul qiladi 1-array nomi 2-index key nomi 3-true yoki false

print_r(array_keys($array ,'aa',true));

//array_key_exists(); massiv key indexlari orasidan ko'rsatilga index keyni qaytaradi
//boolean typeda natija qaytaradi ture yoki false | 1 yoki 0
print_r(array_key_exists('b',$array));

//array_rand(); massiv indexlar orasidan indexlarni tanlab oladi random asosida
//2ta argument qabul qiladi 1-massiv nomi 2-elementlar sonini qabul qiladi
// 2-argumentga qiymat berilmasa default holatda bitta qiymat qaytaradi
print_r(array_rand($array,4));
