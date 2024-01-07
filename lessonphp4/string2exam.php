<?php
$str = "az2z s2alom232";
$s = 0;
echo substr($str, -5) . "\n";//bu function matndagi ko'rsatilgan indexdan boshlab qolganini ekranga chiqaradi
echo strpos($str,"2z3",$s) . "\n";//belgini indexsini qaytaradi eng birinchisini
echo strrpos($str,"2",$s,);//belgini indexlarini eng oxirgisini qaytaradi

