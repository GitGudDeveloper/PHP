<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
        }
        td {
            padding: 20px;
        }
    </style>
</head>
<body>
<?php
define("FARE", 10);
define("SENIOR_AGE", 65);
define("SENIOR_DISCOUNT", 50);
define("JUNIOR_AGE", 12);
define("JUNIOR_DISCOUNT", 50);
define("KIDS_AGE", 3);
define("KIDS_DISCOUNT", 100);

echo "<table>\n";

$age = 10;
for ($i = 0; $i <= 80; $i++) {
    $age = $i;
    if ($age >= SENIOR_AGE) {
        $price = FARE * ((100 - SENIOR_DISCOUNT) / 100);
    } else if ($age < KIDS_AGE) {
        $price = FARE * ((100 - KIDS_DISCOUNT) / 100);
    } else if ($age <= JUNIOR_AGE) {
        $price = FARE * ((100 - JUNIOR_DISCOUNT) / 100);
    } else {
        $price = FARE;
    }

    echo "<tr><td>riemand van ".$age." betaald ".$price." euro.</td></tr>\n";

}
echo "</table>";


//if ($age >= SENIOR_AGE) {
//    $price = FARE * ((100 - SENIOR_DISCOUNT) / 100);
//} else if ($age < KIDS_AGE) {
//    $price = FARE * ((100 - KIDS_DISCOUNT) / 100);
//} else if ($age <= JUNIOR_AGE) {
//    $price = FARE * ((100 - JUNIOR_DISCOUNT) / 100);
//} else {
//    $price = FARE;
//}
//
//echo "iemand van ".$age." betaald ".$price." euro.";



?>
</body>
</html>
