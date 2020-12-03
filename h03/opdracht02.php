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
    </style>
</head>
<body>
<?php
for ($a =0; $a <= 8; $a++) {
    for ($b = 0; $b < $a; $b++) {
        echo "*";
    }
    echo "*<br>";
}
?>
</body>
</html>
