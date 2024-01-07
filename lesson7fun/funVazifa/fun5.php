<?php
$topildi = null;
if (isset($_POST['phoneNumber']) && !empty($_POST['phoneNumber'])) {
    if (is_numeric($_POST['phoneNumber'])) {
        $phoneNumber = $_POST['phoneNumber'];

        function telNum($phoneNumber)
        {
            if (substr($phoneNumber, 0, 4) == '+998') {
                $kod = substr($phoneNumber, 4, 2);
                if ($kod == '90' || $kod == '91') {
                    $topildi = "Beeline";
                    return $topildi;
                }
                if ($kod == '93' || $kod == '94') {
                    $topildi = "Ucell";
                    return $topildi;
                }
                if ($kod == "97") {
                    $topildi = "Mobiuz";
                    return $topildi;
                }
                if ($kod == '99') {
                    $topildi = 'Uztelecom';
                    return $topildi;
                }else {
                    echo "Bunday kod xozirda mavjud emas";
                }
            } else {
                echo "nomer xato kiritildi";
            }
        }
        echo telNum($phoneNumber);
    } else {
        echo "nomer xato kiritildi";
    }
} else {
    echo "Telefon nomerni kiriting";
}
?>
<form method="post">
    <input type="text" name="phoneNumber"> Telefon nomer
    <br><br>
    <input type="submit" value="OK">
</form>
  