<?php
$non = null;
$sum = null;
if (isset($_POST['capacity'])) {
    $non = $_POST['capacity'];
    $sum += match ($non) {
        '25cm' => 40000,
        '30cm' => 45000,
        '35cm' => 50000
    };
    if (isset($_POST['non'])) {
        echo "Non: " . $_POST['non'] . "<br>";
        echo "<hr>Kattaligi: " . $_POST['capacity'] . "<br>";
    }

    echo "<hr>Ustiga: <br>";
    if (isset($_POST['pamidor'])) {
        $sum += 2000;
        echo $_POST['pamidor'] . "<br>";
    }
    if (isset($_POST['bodring'])) {
        $sum += 2000;
        echo $_POST['bodring'] . "<br>";
    }
    if (isset($_POST['kurka'])) {
        $sum += 2000;
        echo $_POST['kurka'] . "<br>";
    }
    if (isset($_POST['qoziqorin'])) {
        $sum += 2000;
        echo $_POST['qoziqorin'] . "<br>";
    }
    if (isset($_POST['zaytun'])) {
        $sum += 2000;
        echo $_POST['zaytun'] . "<br>";
    }
    if (isset($_POST['qazi'])) {
        $sum += 2000;
        echo $_POST['qazi'] . "<br>";
    }
    echo "<hr> Qo'shimcha: <br>";
    if (isset($_POST['achchiq'])) {
        $sum += 3000;
        echo $_POST['achchiq'] . "<br>";
    }
    if (isset($_POST['sosiska'])) {
        $sum += 3000;
        echo $_POST['sosiska'] . "<br>";
    }
    if (empty($_POST['achchiq']) && empty($_POST['sosiska'])) {
        echo "Qo'shimchalardan xoxlaysizmi";
    } else {
        echo "<hr> Jami: " . $sum;
    }
} else {
    echo '<p style="color: red"> Kattaligini Tanlang </p>';
}

?>

<!doctype html>
<html lang="`uz`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pitsa</title>
</head>
<body>
<div style="margin-left:200px;margin-right:200px;">
    <div style="background: paleturquoise; padding: 1px 1px 5px 20px">
        <form method="post">
            <h2 style="padding-left: 300px">Pitsa buyurma qilish</h2>
            <strong>Noni qanday bo'lsin</strong> <br>
            <select style="margin-top: 5px" name="non">
                <option value="Yupqa">Yupqa</option>
                <option value="Qalin">Qalin</option>
            </select>
            <h4>Kattaligi</h4>

            <input type="radio" name="capacity" value="25cm"> 25cm
            <input type="radio" name="capacity" value="30cm"> 30cm
            <input type="radio" name="capacity" value="35cm"> 35cm

            <h4>Ustiga nima solaylik</h4>
            <input type="checkbox" name="pamidor" value="Pamidor"> Pomidor
            <input type="checkbox" name="bodring" value="Tuzlangan bodring"> Tuzlangan bodring <br>
            <br>
            <input type="checkbox" name="kurka" value="Kurka go'sht"> Kurka go'sht
            <input type="checkbox" name="qoziqorin" value="Qo'ziqorin"> Qo'ziqorin <br>
            <br>
            <input type="checkbox" name="zaytun" value="Zaytun">Zaytun
            <input type="checkbox" name="qazi" value="Qazi">Qazi<br>

            <h4>Qo'shimchalar</h4>
            <input type="checkbox" name="achchiq" value="Achchiq">Achchiq
            <input type="checkbox" name="sosiska" value="Sosiskali">Sosiskali
            <hr>
            <button>Buyurtma berish</button>
        </form>
    </div>
</div>
</body>
</html>

