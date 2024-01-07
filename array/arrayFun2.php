<?php
$array = [2,3,4,5,5,6];
$array1 = [2,3,4,5,5,6];

echo array_push($array,2);//bu fun massivga yangi element qo'shadi eng oxiriga
echo array_pop($array);//bu fun arrayni oxirgi elementni o'chirib yuboradi
print_r(array_diff($array,$array1));//massiv elementlarini farqlash uchun ishlatiladi
print_r(array_merge($array,$array1));//array_ni birlashtirish unchun ishlatiladi
print_r(array_flip($array));//massiv elementlar bilan indexlar o'rnini almashtirib qo'yandi
print_r(array_count_values($array));//massiv elementlar takrorlanganlarini sonini qaytaradi





