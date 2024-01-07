<?php
/**
 * 2-masala.
 * Xonaning balandligi 2.7m. Xonaning tomonlari 5m va 3 m.
 * 1 ta g`ishtning balandli 10 sm, uzunli 25sm, eni 12sm.
 * Oynasi va eshiki yo`q bo`lgan xonani, faqat devorlarini g`ishtdan terish uchun
 * nechta g`isht kerak bo`ladi.
 *
 * Devorning qalinligi : 25sm.
 * G`isht orasiga qo`yiladigan loyning o`lchamlari hisobga olinmasin.
 */
$xonaB = 2.70;
$xonaE = 3;
$xonaU = 5;
$gishtB = 0.10;
$gishtU = 0.25;
$gishtE = 0.12;
$sum = ($xonaE * $xonaU) * 0.25;
$sum *= $xonaB;
$sumGisht = $gishtB * $gishtU * $gishtE;
$sum /= $sumGisht;
echo $sum . " ta g'isht ketadi \n";