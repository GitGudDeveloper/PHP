<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>opdracht 1</title>
</head>

<?php
session_start();
$users = array(
    "test@test.nl" => array("wachtwoord" => "test", "rol" => "administrator"),
    "klaas@carpets.nl" => array( "wachtwoord" => "snoepje777", "rol" => "gebruiker")
);

$warning = "";

if (isset($_GET["logout"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['knop'])
    && isset($users[$_POST["email"]])
    && $users[$_POST["email"]]["wachtwoord"] == $_POST['wachtwoord']) {
    $_SESSION["user"] = array("naam" => $_POST["email"],
                              "wachtwoord" => $users[$_POST["email"]]['wachtwoord'],
                              "rol" => $users[$_POST["email"]]['rol']);
    $message = "welkom ".$_SESSION["user"]['naam']." met de rol ".$_SESSION["user"]["rol"];
    $warning = "";
} elseif (!isset($_POST['knop'])) {
    $message = "inloggen!";
    $warning = "";
} else {
    $message = "inloggen!";
    $warning = "het emailadres en/of wachtwoord is onjuist";
}

print_r($_SESSION);
?>

<body>
<h1><?php echo $message; ?></h1>
<h4><?php echo $warning; ?></h4>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input class="form-control" type="email" name="email" >
    </div>
    <div class="form-group">
        <label for="password">Wachtwoord:</label>
        <input class="form-control" type="password" name="wachtwoord" >
    </div>
    <button class="btn btn-primary" type="submit" name="knop" >versturen</button
</form>
<p><a href="website.php">website</a></p>
<p><a href="admingedeelte.php">administrator only</a></p>
<p><a href="opdracht01.php?logout">uitloggen</a></p>

</body>
</html>