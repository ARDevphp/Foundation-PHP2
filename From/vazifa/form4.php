<?php
/**
 *  Forma hosil qiling va  2 ta polya qoshing. 4 ta radio ham qushing.
 * Radiolar: + - * / amallaridan birini bajarish uchun.
 * Ikkita polyani toldirib radiodan birortasi tanlansa, masalan + tanlansa,
 * ikkitasini yigindisini hisoblasin. Xatolarga etibor qiling.
 */
if (isset($_POST['number1']) && isset($_POST['number2']) && !empty($_POST['number1']) && !empty($_POST['number2'])) {
    if (!is_numeric($_POST['number1']) || !is_numeric($_POST['number2'])) {
        $result1 = "Faqat Son kiriting";
    } else {
        $son1 = $_POST['number1'];
        $son2 = $_POST['number2'];

        if (empty($_POST['qoshuv'])) {
            $_POST['qoshuv'] = null;
        } else {
            $result = $son1 + $son2;
        }
        if (empty($_POST['ayruv'])) {
            $_POST['ayruv'] = null;
        } else {
            $result = $son1 - $son2;
        }
        if (empty($_POST['kopaytruv'])) {
            $_POST['kopaytruv'] = null;
        } else {
            $result = $son1 * $son2;
        }
        if (empty($_POST['boluv'])) {
            $_POST['boluv'] = null;
        } else {
            $result = $son1 / $son2;
        }
    }
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
<body style="margin: 0">
<div class="foo" style="padding: 100px 300px ; background: aliceblue;">
    <form method="post">
        <p>Natija: <?php echo empty($result) ? null : $result; echo empty($result1) ? null : $result1 ?></p>
        <input type="text" name="number1"> First number <br><br>
        <input type="text" name="number2"> Second number<br> <br>
        <input type="submit" name="qoshuv" value="Qo'shish">
        <input type="submit" name="ayruv" value="Ayrish">
        <input type="submit" name="kopaytruv" value="Ko'paytrish">
        <input type="submit" name="boluv" value="Bo'lish">
    </form>
</div>
</body>
</html>
