<?php

$result = null;
if (isset($_POST['number1']) && isset($_POST['number2'])) {
    if (is_numeric($_POST['number1']) || is_numeric($_POST['number2'])) {
        $son1 = $_POST['number1'];
        $son2 = $_POST['number2'];

        if (isset($_POST['qoshuv'])) {
            function addition(int $son1, int $son2): int
            {
                return $son1 + $son2;
            }

            $result = addition($son1, $son2);
        }
        if (isset($_POST['ayruv'])) {
            function subtraction(int $son1, int $son2): int
            {
                return $son1 - $son2;
            }

            $result = subtraction($son1, $son2);
        }
        if (isset($_POST['kopaytruv'])) {
            function multiplication(int $son1, int $son2): int
            {
                return $son1 * $son2;
            }

            $result = multiplication($son1, $son2);
        }
        if (isset($_POST['boluv'])) {
            function division(int $son1, int $son2): int
            {
                return $son1 / $son2;
            }

            $result = division($son1, $son2);
        }

    } else {
        echo '<hr> Faqat son kiriting';
    }
}
?>

<form method="post">
    <p>Natija: <?= $result ?></p>
    <input type="text" name="number1"> First number <br><br>
    <input type="text" name="number2"> Second number<br> <br>
    <input type="submit" name="qoshuv" value="Qo'shish">
    <input type="submit" name="ayruv" value="Ayrish">
    <input type="submit" name="kopaytruv" value="Ko'paytrish">
    <input type="submit" name="boluv" value="Bo'lish">
</form>

