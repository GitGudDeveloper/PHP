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
            border: none;
            border-collapse: collapse;
        }
        td {
            padding: 15px;
        }
        td.border {
            border: solid 1px black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<?php
$zwemclubs = [
    "De spartelkuikens" => 25,
    "De waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23
];

echo '<table>';

foreach ($zwemclubs as $clubnaam => $aantalleden) {
    echo '<tr>';
    echo '<td class="border">'. $clubnaam .'</td>';
    echo '<td class="border">'. $aantalleden .'</td>';
    $aantalplaatjes = floor ($aantalleden / 5);
    echo '<td>';
    for ($i = 0; $i < $aantalplaatjes; $i++) {
        echo '<img src="zwemmer.jpg" alt="zwemmer">';
    }
    echo '</td>';
    echo '</tr>';
}

echo '</table>';
?>
</body>
</html>




