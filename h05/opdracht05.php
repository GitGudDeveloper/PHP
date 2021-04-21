<?php

session_start();

$users = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];

function check_credentials($mailadres, $wachtwoord) {

    global $users;


foreach ($users as $key => $value) {
    if ($key == $mailadres and $value == $wachtwoord) {
        return true;
    }
}
    return false;
}



?>

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
<?php if(!isset($_POST['knop'])) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Naam: <input type="text" name="mailadres" placeholder="mailadres">
        wachtwoord: <input type="password" name="wachtwoord" placeholder="wachtwoord">
        <input type="submit" name="knop" value="verstuur">
    </form>

    <?php
    if (isset($_SESSION['error']) and !empty($_SESSION['error'])) {
        echo $_SESSION['error'];
        $_SESSION['error'] = null;
    }
    ?>

    <?php
} else {
    if (!isset($_POST['mailadres']) or empty($_POST['mailadres'])) {
        $_SESSION['error'] = "je bent vergeten je mailadres in te vullen!";
        header("Location: " . $_SERVER['PHP_SELF']);
    }
    if (!isset($_POST['wachtwoord']) or empty($_POST['wachtwoord'])) {
        $_SESSION['error'] = "je bent vergeten je wachtwoord in te vullen!";
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    $mailadres = $_POST['mailadres'];
    $wachtwoord = $_POST['wachtwoord'];


    if (check_credentials($mailadres, $wachtwoord)) {
        exit("welkom!");
    } else {
        exit("sorry, geen toegang!");
    }

}
?>
</body>
</html>