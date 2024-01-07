<?php
if (isset($_POST['number']) && !empty($_POST['number'])) {
    if (!is_numeric($_POST['number'])) {
        echo "Son kiriting";
    } else {
        $number = $_POST['number'];
        switch ($number) {
            case 1:
            {
                echo "Dushanba";
                break;
            }
            case 2:
            {
                echo "Seshanba";
                break;
            }
            case 3:
            {
                echo "Chorshanba";
                break;
            }
            case 4:
            {
                echo "Payshanba";
                break;
            }
            case 5:
            {
                echo "Juma";
                break;
            }
            case 6:
            {
                echo "Shanba";
                break;
            }
            case 7:
            {
                echo "Yakshanba";
                break;
            }
        }

    }
}else{
    echo "sonni kiriting";
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
<form method="post">
    son kiriting (1-7)
    <input type="text" name="number" placeholder="1...7">
    <input type="submit" name="ok" value="ok">
</form>
</body>
</html>
