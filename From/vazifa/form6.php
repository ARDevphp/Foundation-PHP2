<?php

$sum = null;

//sum -> 1-taom
if (isset($_POST['mastava'])) {
    $mastava = $_POST['mastava'] = 16000;
    $sum += $mastava;
}
if (isset($_POST['moxora'])) {
    $moxora = $_POST['moxora'] = 15500;
    $sum += $moxora;
}
if (isset($_POST['soup'])) {
    $soup = $_POST['soup'] = 15000;
    $sum += $soup;
}
if (isset($_POST['norine'])) {
    $norine = $_POST['norine'] = 20500;
    $sum += $norine;
}

//sum->2-taom
if (isset($_POST['osh'])) {
    $osh = $_POST['osh'] = 20000;
    $sum += $osh;
}
if (isset($_POST['mantis'])) {
    $mantis = $_POST['mantis'] = 18500;
    $sum += $mantis;
}
if (isset($_POST['qozonK'])) {
    $qazonK = $_POST['qozonK'] = 23000;
    $sum += $qazonK;
}
if (isset($_POST['lagmon'])) {
    $lagmon = $_POST['lagmon'] = 21500;
    $sum += $lagmon;
}

//sum->ichimliklar
if (isset($_POST['tea'])) {
    $tea = $_POST['tea'] = 2000;
    $sum += $tea;
}
if (isset($_POST['cola'])) {
    $cola = $_POST['cola'] = 8000;
    $sum += $cola;
}
if (isset($_POST['fanta'])) {
    $fanta = $_POST['fanta'] = 8000;
    $sum += $fanta;
}
if (isset($_POST['coffee'])) {
    $coffee = $_POST['coffee'] = 10500;
    $sum += $coffee;
}

//sum->salad
if (isset($_POST['achuchu'])) {
    $achuchu = $_POST['achuchu'] = 5000;
    $sum += $achuchu;
}
if (isset($_POST['olivye'])) {
    $olivye = $_POST['olivye'] = 8000;
    $sum += $olivye;
}
if (isset($_POST['fransuzkiy'])) {
    $fransuzkiy = $_POST['fransuzkiy'] = 8000;
    $sum += $fransuzkiy;
}
if (isset($_POST['kapriz'])) {
    $kapriz = $_POST['kapriz'] = 10500;
    $sum += $kapriz;
}

$usluga = $sum * 0.15;
$sum += $usluga;

?>
<!doctype html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="margin-left: 200px;margin-right: 200px">
    <div style="background:orange;padding: 1px 1px 5px 20px">
        <h1>Menyu</h1>
        <form method="post">
            <div>
                <h4>1-Taom</h4>
                <input type="checkbox" name="mastava">Mastava (16 000 so'm)
                <input type="checkbox" name="moxora">Moxora (15 500 so'm)
                <input type="checkbox" name="soup">Sho'rva (15 000 so'm)
                <input type="checkbox" name="norine">Norin (20 500 so'm)
            </div>
            <div>
                <h4>2-Taom</h4>
                <input type="checkbox" name="osh">Osh(20 000 so'm)
                <input type="checkbox" name="mantis">Manti(18 500 so'm)
                <input type="checkbox" name="qozonK">Qazon Kabob(23 000 so'm)
                <input type="checkbox" name="lagmon">Lag'mon(21 500 so'm)
            </div>
            <div>
                <h4>Ichimlik</h4>
                <input type="checkbox" name="tea">Choy(2 000 so'm)
                <input type="checkbox" name="cola">Coca Cola(8 000 so'm)
                <input type="checkbox" name="fanta">Fanta(8 000 so'm)
                <input type="checkbox" name="coffee">Kofe(10 500 so'm)
            </div>
            <div>
                <h4>Salat</h4>
                <input type="checkbox" name="achuchu"> Achchiq chuchuk(5 000 so'm)
                <input type="checkbox" name="olivye"> Olivye(8 000 so'm)
                <input type="checkbox" name="fransuzkiy"> Fransuzkiy(8 000 so'm)
                <input type="checkbox" name="kapriz"> Mujskiy kapriz(10 500 so'm)
            </div>
            <div>
                <h3><strong>15% usluga</strong></h3>
                <input type="submit" name="result" value="Hisoblash">
            </div>
            <h3>Jami: <?= $sum ?></h3>
        </form>
    </div>
</div>
</body>
</html>

