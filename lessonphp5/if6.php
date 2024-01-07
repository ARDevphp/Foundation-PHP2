<?php
/**
 * 6-masala.
 * Eshmat do`kondan kiyim kechak harid qildi.
 * Harajatlarining summasi N so`m. Harid qilib kassani oldiga borsa,
 * agar harid qilgan narsalaringizni narxi 300 ming so`mdan ko`p bo`lsa,
 * 10% chegirma, agar 500 ming so`mdan ko`p bo’lsa 20% chegirma bor ekan.
 * Eshmat sotib olgan haridlariga qancha to’laganini aniqlang.
 */
$n = 545700;
$chegirma10 = $n / 10;
$chegirma20 = $chegirma10 * 2;

if ($n > 300000 && $n < 500000) echo $chegirma10 . "\n";
if ($n > 500000) echo $chegirma20 . "\n";