<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "administrator") {
    echo "<h1>welkom in het admingedeelte ".$_SESSION['user']["naam"];
    echo "<p><a href='opdracht01.php'>login pagina</a></p>";
} else {
    header('location: opdracht01.php');
}