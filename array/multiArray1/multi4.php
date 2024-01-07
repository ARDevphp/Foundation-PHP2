<?php

$kontaktbook = array(
    array(
        'name' => 'Aziz',
        'family' => 'Mirzayev',
        'numbers' => '+998909999999',
    ),
    array(
        'name' => 'Jasur',
        'family' => 'Mamatov',
        'numbers' => '+998909997686'
    ),

    array(
        'name' => 'Mirzo',
        'family' => 'Aliyev',
        'numbers' => '+998909234354'
    ),
    array(
        'name' => 'Avaz',
        'family' => 'Mirzayev',
        'numbers' => '+998901234567'
    ), array(
        'name' => 'Aziz',
        'family' => 'Mirzayev',
        'numbers' => '+998909999998',
    ),
    array(
        'name' => 'Valijon',
        'family' => 'Mamatov',
        'numbers' => '+998909697686'
    ),

    array(
        'name' => 'Mamirjon',
        'family' => 'Aliyev',
        'numbers' => '+998909234353'
    ),
    array(
        'name' => 'Azamjon',
        'family' => 'Mirzayev',
        'numbers' => '+998901234511'
    )
);

if (isset($_POST['numbers'])) {
    $numbers = $_POST['numbers'];
    foreach ($kontaktbook as $item => $value) {
        foreach ($value as $item1 => $value1) {

            if ($numbers == $value1) {
                $name = $kontaktbook[$item]['name'];
                $family = $kontaktbook[$item]['family'];
                $number = $kontaktbook[$item]['numbers'];
                echo "$name  $family  $number";
            }
        }

    }
}
?>

<div style="margin: 70px">

    <form method="post">
        <h3>Telefon nomer</h3>
        <input type="text" name="numbers" value="">
        <br>
        <br>
        <input type="submit" value="OK">
    </form>
    <table border="1">
        <hr>
        <?php
        echo "<h2>O'quvchilar xaqida qisqa malumot</h2>";
        foreach ($kontaktbook as $item => $value) {
            foreach ($value as $item1 => $value1) {
                if ($item1 != 'family') {
                    echo "<td>$value1</td>";
                }
            }
            echo "<tr></tr>";
        }
        ?>
    </table>
</div>





