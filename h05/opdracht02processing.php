<?php
   $NOTICE = "LET OP! ";

if  (isset ($_POST['naam']) && !empty($_POST['naam'])) {
    $_naam = $_POST['naam'];
} else {
    echo $NOTICE."je hebt geen naam ingevuld!<br>\n";
}

if  (isset ($_POST['email']) && !empty($_POST['email'])) {
    $_email = $_POST['email'];
} else {
    echo $NOTICE."je hebt geen E-mail adres ingevuld!<br>\n";
}

if  (isset ($_POST['password']) && !empty($_POST['password'])) {
    $_password = $_POST['password'];
} else {
    echo $NOTICE."je hebt geen wachtwoord ingevuld!<br>\n";
}

//$_naam = $_POST['naam'];
//$_email = $_POST['email'];
//$_password = $_POST['password'];

if (!isset($_naam) || !isset($_email) || !isset($_password)) {
    exit("het script is voortijdig gestopt.");
}

echo "je hebt de volgende gegevens ingevuld: <br>\n";
echo "Naam: {$_naam}<br>\n";
echo "E_mail: {$_email}<br>\n";
echo "Wachtwoord: {$_password}<br>\n";
