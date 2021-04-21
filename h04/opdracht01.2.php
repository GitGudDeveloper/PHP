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
<?php
for ($i = -10; $i <= 30; $i++) {
    $welwaarnietwaar =CheckIfDivisableBy($i) ? " " : " NIET ";
    echo "{$i} is{$welwaarnietwaar}deelbaar door 3<br>\n";
}


function CheckIfDivisableBy($number) {
    //manier 1
//    if ($number % 3 === 0) {
//        $result = true;
//    } else {
//        $result = false;
//    }
//    return $result;

    //manier 2
//    $result = $number % 3 === 0 ? true: false;
//    return $result;

    //manier 3
    return $result = $number % 3 === 0;
}
?>
</body>
</html>
