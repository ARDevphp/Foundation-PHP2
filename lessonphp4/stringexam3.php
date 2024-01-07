<?php
$str = "Abdulxamid Abdulaziz Abdulloh";
echo str_replace("Abdulaziz","******",$str)."\n";//matnda so'zlarni o'zgartish imkonini beradi
echo md5($str) . "\n";//matnni shifrlash uchun ishlatiladi
echo htmlspecialchars($str) . "\n";//teglarni ekranga chiqarish
echo strip_tags($str);//html teglarini o'chirib tashlaydi 2-argumentiga o'chirilishi kerak bo'magan
// teg ko'satishimiz kerek agar o'chirilishi  shart bo'lmagan teg bo'lmasa