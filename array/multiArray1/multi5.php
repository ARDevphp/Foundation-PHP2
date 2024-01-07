<?php
$mamlakatlar = array(
    array(
        "nomi" => "O'zbekiston",
        "aholi_soni" => "32979000",
        "maydoni" => "448978",
        "poytaxti" => "Toshkent",
        "pul_birligi" => "So'm",
    ),
    array(
        "nomi" => "Qozog'iston",
        "aholi_soni" => "18157078",
        "maydoni" => "2724902",
        "poytaxti" => "Nursulton",
        "pul_birligi" => "Tanga",
    ),
    array(
        "nomi" => "Turkmaniston",
        "aholi_soni" => "5125693",
        "maydoni" => "488100",
        "poytaxti" => "Ashxobod",
        "pul_birligi" => "Manat",
    ),
    array(
        "nomi" => "Turkiya",
        "aholi_soni" => "80121000",
        "maydoni" => "783000",
        "poytaxti" => "Ankara",
        "pul_birligi" => "Turk lira",
    ),
    array(
        "nomi" => "Rossiya",
        "aholi_soni" => "143000000",
        "maydoni" => "17340000",
        "poytaxti" => "Moskva",
        "pul_birligi" => "Rubl",
    ),
    array(
        "nomi" => "Xitoy",
        "aholi_soni" => "1347374000",
        "maydoni" => "9596000",
        "poytaxti" => "Pekin",
        "pul_birligi" => "Yuan",
    ),
    array(
        "nomi" => "AQSH",
        "aholi_soni" => "327000000",
        "maydoni" => "9631000",
        "poytaxti" => "Washington",
        "pul_birligi" => "Dollar",
    ),
);


for ($i = 0; $i < count($mamlakatlar); $i++) {
    for ($j = $i + 1; $j < count($mamlakatlar) - 1; $j++) {
        if ($mamlakatlar[$i]['aholi_soni'] > $mamlakatlar[$j]['aholi_soni']) {
            $temp = $mamlakatlar[$i];
            $mamlakatlar[$i] = $mamlakatlar[$j];
            $mamlakatlar[$j] = $temp;
        }
    }
}

?>
<table border="1" ;>
    <?php
    foreach ($mamlakatlar as $key => $value) {
        foreach ($value as $item => $value1) {
            echo "<td>$item - $value1</td>";
        }
        echo "<tr></tr>";
    }
    ?>
</table>

