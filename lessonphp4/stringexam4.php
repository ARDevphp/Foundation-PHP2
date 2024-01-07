<?php
$str = "adu adu salom aziz salim";

echo substr_count($str, 'adu', 1) . "\n";//matnda bir xil so'z nechtaligini sonni aniqlaydi
echo trim($str) . "\n";//matnda prabel belgilarini o'chirib tashlaydi
echo ltrim($str) . "\n";//chap tarafdan probelni o'chirish
echo rtrim($str) . "\n";//o'ng tarafdan probelni o'chirish
echo str_word_count($str) . "\n";//matndagi so'zlarni sonni hisoblaydi
echo strstr($str , "d") . "\n";//matnda argumentdagi qiymat topilsa undankiyingi qismlarini ekranga chiqaradi
//agar 3-argumentiga true bersak //shu belgigacha bo'lgan so'zlarni chiqarib beradi