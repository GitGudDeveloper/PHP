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

$kappersagenda = [
    "9:15" => "mevr. Pietersen",
    "9:30" => "mevr. Willems",
    "9:45" => "",
    "10:00" => "Paul van den Broek",
    "10:15" => "Karel de Meeuw",
    "10:30" => ""
];

print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $tijd => $afspraak) {
if($afspraak == "") {
print("<li>".$tijd."</li>") ;
}
}


?>
</body>
</html>
