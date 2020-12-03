<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        img {
            max-width: 200px;
            height: 200px;
        }
        img.red-border {
            border: red solid 5px;
        }
        img.green-border {
            border: green solid 5px;
        }
    </style>
</head>
<body>

<?php

for ($fotonummer = 1; $fotonummer <= 9; $fotonummer++) {
    if ($fotonummer % 2 == 0) {
        echo '<img class="red-border" src="cat_'.$fotonummer.'.jpg">';
    } else {
        echo '<img class="green-border" src="cat_'.$fotonummer.'.jpg">';
    }

}
?>
</body>
</html>
