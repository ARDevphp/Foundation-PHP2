<?php
$a = [1,2,2,3,43,4,5];
echo is_array($a);//bu funksiya massiv yoki massiv emaslini tekshiradi
echo in_array(4,$a);//bu fun messiv element bor yoki yoqligini tekshiradi
echo array_search(4,$a,44);//bu fun element bo'lsa indexni qaytaradi
print_r(array_column($a,2));//bu fun massivni indexsiga murojat qiladi odatda ko'p o'lchovli massivlada foydaniladi
echo count($a,1);//bu fun array uzunlugini qaytaradi argument sifatida iktagacha qiymat bera olamiz
echo sizeof($a);//bu fun count() fun b.n bir xil ishlaydi