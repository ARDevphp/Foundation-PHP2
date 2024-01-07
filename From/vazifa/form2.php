<?php
if (isset($_POST['son1']) && !empty($_POST['son1']) && isset($_POST['son2']) && !empty($_POST['son2'])) {
    if (!is_numeric($_POST['son1']) || !is_numeric($_POST['son2'])){
        echo "Faqat son kiriting:";
    }else{
        echo $_POST['son1'] + $_POST['son2'];
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
    <title>kankulyator</title>
</head>
<body>
<hr>
    <form method="post">
        Son1 <input type="text" name="son1"></br><br>
        Son2 <input type="text" name="son2"></br><br>
        <div style="padding-left: 90px">
            <input type="submit" name="ok" value="OK">
        </div>
    </form>
</body>
</html>
