<?php
// 100 litrlik bochka bor. 3 va 4 litrlik chelaklar yordamida suv bilan to’ldirish kerak. 3 litrlik 3
//sekundda to’ladi. 4litrlik chelak 4 sekundda to’ladi. Bochka nechi sekundda to’ladi?
// 3 va 4 litrlik chelaklardan nechtadan quyilganini ham aniqlansin. jo'mrak 2 ta
/**
 *

<?php
$capacity = 100; // емкость бочки (в литрах)
$bucket_size = 3; // размер 3-литровой бутыли (в литрах)
$bucket_capacity = 4; // размер 4-литрового ведра (в литрах)

// определяем скорость заполнения бочки
$bucket_speed = ($bucket_capacity + $bucket_size) / $bucket_capacity * 1 / 3;

// вычисляем время заполнения бочки и количество использованных бутылок
$fill_time = $capacity / $bucket_speed;
$used_buckets = floor($fill_time);

echo "Время заполнения бочки: " . $fill_time . " секунды\n";
echo "Использовано 3-литровых бутылок: " . ($used_buckets - $bucket_capcity) . " штук\n";
echo "Использовано 4-литровых ведер: " . $used_buckets . " штук";
 */

$bochka = 100;
$litr_3 = 3;
$litr_4 = 4;

$litr3 = 0;
$litr4 = 0;

$i = 0;
while ($i <= $bochka) {
    if ($i % $litr_3 == 0) {
        $i += $litr_3;
        $litr3++;
    }
    if ($i%$litr_4==0){
        $i += $litr_4;
        $litr4++;
    }
}
echo $litr3 . "\n";
echo $litr4 . "\n";
