<?php
$sum = null;
$taom = 0;
if (isset($_POST['taom'])) {
    $taom = $_POST['taom'];
    switch ($taom) {
        case 'osh' :{
            $sum += 20500;
        }
        case 'choy': {
            $sum += 2000;
        }
        case 'non': {
            $sum += 2500;
        }
    }
}
echo $sum;
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
<form method="post">
    osh(20 500 so'm)<input type="checkbox" name="taom" value="osh"><br>
    choy(2000 so'm)<input type="checkbox" name="taom" value="choy"><br>
    non(2500 so'm)<input type="checkbox" name="taom" value="non"><br>
    <input type="submit" name="result">
</form>
</body>
</html>
