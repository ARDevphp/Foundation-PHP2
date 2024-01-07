<!doctype html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .shaxmat {
            margin-left: 200px;
            margin-right: 200px;
            padding-top: ;
        }

        .shaxmat > .fooQora {
            width: 12%;
            padding-top: 12%;
            background: black;
        }

        .shaxmat {
            display: flex;
            flex-wrap: wrap;
        }

        .shaxmat > .fooOq {
            width: 12%;
            padding-top: 12%;
            background: wheat;
        }
    </style>
</head>
<body>
<div class="shaxmat">
    <?php
    $i = 0;
    while ($i < 8) {
        $j = 1;
        while ($j <= 8) {
            if ($j % 2 == 0) echo '<div class="fooQora"></div> j' . $j;
            if ($j % 2 == 1) echo '<div class="fooOq"></div> j' . $i-1;
            $j++;
        }
        echo "<br>";
        $i++;
    }
    ?>
</div>
</body>
</html>