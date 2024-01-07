<?php
$byte = null;
$kilobyte = null;
$megabyte = null;
$gigabyte = null;
$terabyte = null;

if (isset($_POST['byte']) && !empty($_POST['byte'])) {
    $byte = $_POST['byte'];
    $kilobyte = $byte / 1024;
    $megabyte = $kilobyte / 1024;
    $gigabyte = $megabyte / 1024;
    $terabyte = $gigabyte / 1024;
}
if (isset($_POST['kilobyte']) && !empty($_POST['kilobyte'])) {
    $kilobyte = $_POST['kilobyte'];
    $byte = $kilobyte * 1024;
    $megabyte = $kilobyte / 1024;
    $gigabyte = $megabyte / 1024;
    $terabyte = $gigabyte / 1024;
}
if (isset($_POST['megabyte']) && !empty($_POST['megabyte'])) {
    $megabyte = $_POST['megabyte'];
    $kilobyte = $megabyte * 1024;
    $byte = $kilobyte * 1024;
    $gigabyte = $megabyte / 1024;
    $terabyte = $gigabyte / 1024;
}
if (isset($_POST['gigabyte']) && !empty($_POST['gigabyte'])) {
    $gigabyte = $_POST['gigabyte'];
    $megabyte = $gigabyte * 1024;
    $kilobyte = $megabyte * 1024;
    $byte = $kilobyte * 1024;
    $terabyte = $gigabyte / 1024;
}
if (isset($_POST['terabyte']) && !empty($_POST['terabyte'])) {
    $terabyte = $_POST['terabyte'];
    $gigabyte = $terabyte * 1024;
    $megabyte = $gigabyte * 1024;
    $kilobyte = $megabyte * 1024;
    $byte = $kilobyte * 1024;
}
?>

<!doctype html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Converter</title>
</head>
<body>
<div style="margin-left: 300px; margin-right: 300px">
    <div style="background: aliceblue; padding:5px 10px 10px 155px">
        <form method="post">
            <h4>Bytes: <?= $byte ?></h4>
            <input type="number" name="byte"><br>

            <h4>Kilobytes: <?= $kilobyte ?></h4>
            <input type="number" name="kilobyte"><br>

            <h4>Megabybtes: <?= $megabyte ?></h4>
            <input type="number" name="megabyte"><br>

            <h4>Gigaytes: <?= $gigabyte ?></h4>
            <input type="number" name="gigabyte"><br>

            <h4>Terabytes: <?= $terabyte ?></h4>
            <input type="number" name="terabyte"><br>
            <br>
            <hr>
            <input type="submit" value="OK">
        </form>
    </div>
</div>
</body>
</html>
