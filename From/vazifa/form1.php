<?php
/**
 *  Forma hosil qiling va 1 ta input polya va submit button joylang.
 * Inputga yozilgan qiymatni telefon nomermi yoki yoq, shuni aniqlasin.
 * Faqat uzbdagi tel nomerlar uchun. +99891
 */

if (is_numeric($_POST['number']) && isset($_POST['number']) && !empty($_POST['number'])) {
    $number = $_POST['number'];
    $number1 = substr($number, 4, 2);
    $result = $number1 == 90 || $number1 == 91 || $number1 == 93 || $number1 == 94 || $number1 == 97 || $number1 == 99;

    if ($number[0] != '+') {
        echo '<p style="color: red">Telefon nomerda + belgisi bilan boshlansin</p>';
    }

    if (strlen($number) != 13) {
        echo '<p style="color: red"> Telefon nomerni to\'liq kiriting</p>';
    }

    if (!$result) {
        echo '<p style="color: red"> Tegishli kompanyani ko\'dini kiriting </p>';
    }
} else {
    echo "<p style='color: red;'>!Telefon nomerni kiriting</p>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form name="register" method="post">
    Telefon nomer
    <input type="text" name="number" placeholder="+998999999999">
    <input type="submit" name="ok">
</form>
</body>
</html>
