<?php
$mamlakatlar = [
    [
        "nomi" => "O'zbekiston",
        "aholi_soni" => "32.979.000",
        "maydoni" => "448.978",
        "poytaxti" => "Toshkent",
        "pul_birligi" => "So'm",
    ],
    [
        "nomi" => "Qozog'iston",
        "aholi_soni" => "18.157.078",
        "maydoni" => "2.724.902",
        "poytaxti" => "Nursulton",
        "pul_birligi" => "Tanga",
    ],
    [
        "nomi" => "Turkmaniston",
        "aholi_soni" => "5.125.693",
        "maydoni" => "488.100",
        "poytaxti" => "Ashxobod",
        "pul_birligi" => "Manat",
    ],
    [
        "nomi" => "Turkiya",
        "aholi_soni" => "80.121.000",
        "maydoni" => "783.000",
        "poytaxti" => "Ankara",
        "pul_birligi" => "Turk lira",
    ],
    [
        "nomi" => "Rossiya",
        "aholi_soni" => "143.000.000",
        "maydoni" => "17.340.000",
        "poytaxti" => "Mosva",
        "pul_birligi" => "Rubl",
    ],
    [
        "nomi" => "Xitoy",
        "aholi_soni" => "1.347.374.000",
        "maydoni" => "9.596.000",
        "poytaxti" => "Pekin",
        "pul_birligi" => "Yuan",
    ],
    array(
        "nomi" => "AQSH",
        "aholi_soni" => "327000000",
        "maydoni" => "9.631.000",
        "poytaxti" => "Washington",
        "pul_birligi" => "Dollar",
    )
];

?>
<html>
<head>
    <title>Davlatlar</title>
</head>
<body>
<table border="2">
    <?php
    foreach ($mamlakatlar as $item => $value) {
        foreach ($value as $item1 => $value1) {
            echo "<td>$item1  -  $value1</td>";
        }
        echo "<tr></tr>";
    }
    ?>
</table>
</body>
</html>



