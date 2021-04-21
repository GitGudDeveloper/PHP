<?php
$email = $_POST['email'];
$_wachtwoord = $_POST['wachtwoord'];


if ($email == "piet@worldonline.nl" & $_wachtwoord == "doetje123") {
    echo "Welkom";
} elseif ($email == "klaas@carpets.nl" & $_wachtwoord == "snoepje777") {
    echo "Welkom";
} elseif ($email == "truushendriks@wegweg.nl" & $_wachtwoord == "arkiearkie201") {
    echo "Welkom";
} else {
    echo "Sorry, geen toegang!";
}
