<?php
//1-masala
$convert1 = null;
$convert2 = null;
$convert3 = null;
$convert4 = null;
$convert5 = null;
$convert6 = null;
$convert7 = null;
$text = null;

if (isset($_POST['date']) && !empty($_POST['date'])) {
    $text = $_POST['date'];
    if ($text[4] == '-' && $text[7] == '-') {
        $array = explode('-', $text);

        $year = $array[0];//2019
        $month = $array[1];//12
        $day = $array[2];//03

        //3-dekabr, 2019 yil
        $convert1 = array(0 => 3, 1 => '-dekaber', 2 => "$year yil");
        $convert1 = array_replace($array, $convert1);

        //3/12/2019
        $convert2 = array(0 => "$day/", 1 => "$month/", 2 => $year);
        $convert2 = array_replace($array, $convert2);

        //dekabr 3, 2019
        $convert3 = array(0 => "dekabr ", 1 => "$day, ", 2 => $year);
        $convert3 = array_replace($array, $convert3);

        //03.12.2019
        $convert4 = array(0 => "$day.", 1 => "$month.", 2 => $year);
        $convert4 = array_replace($array, $convert4);

        //2019/03/12
        $convert5 = array(0 => "$year/", 1 => "$day/", 2 => $month);
        $convert5 = array_replace($array, $convert5);

        //20190312
        $convert6 = array(0 => $year, 1 => $day, 2 => $month);
        $convert6 = array_replace($array, $convert6);

        //3-dekabr
        $convert7 = array(0 => $day, 1 => "-dekabr");
        $convert7 = array_replace($array, $convert7);
    } else {
        echo 'ishlamadi';
    }
}

?>

<div style="margin-left: 40px; margin-top: 100px">
    <form method="post">
        dddd-mm-dd <br>
        <input type="text" name="date" value="" placeholder="2019-12-03">
        <br>
        <br>
        <input type="submit" name="ok" value="OK">
        <hr>
        <?php
        try {

            $sumArray = array_merge($convert1,$convert2,$convert3,$convert4,$convert5,$convert6,$convert7);
        }catch (Exception $e) {

        }

        for ($i = 0; $i < count($sumArray); $i++) {
            if ($i % 3 == 0){
                echo "<br>";
            }
            echo $sumArray[$i];
        }
        ?>
    </form>
</div>

