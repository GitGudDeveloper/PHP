<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>database tabel</title>
    <style>
        table, tr, td{
            border: solid 1px black;
            border-collapse: collapse;
        }
        td{
            padding: 20px;
        }
    </style>
</head>
<body>

<table><
<?php
$servername = "localhost";
$dbname = "phpschool";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname; port=3307", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die("error 1.");
$stmt->execute() or die("error 2.");

while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" .$row["cursistnr"]. "</td>";
    echo "<td>" .$row["naam"]. "</td>";
    echo "<td>" .$row["roepnaam"]. "</td>";
    echo "<td>" .$row["straat"]. "</td>";
    echo "<td>" .$row["postcode"]. "</td>";
    echo "<td>" .$row["plaats"]. "</td>";
    echo "<td>" .$row["geslacht"]. "</td>";
    echo "<td>" .$row["geb_datum"]. "</td>";
    echo "</tr>";
}
?>
</table>

</body>
</html>