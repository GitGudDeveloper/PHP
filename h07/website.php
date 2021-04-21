<?php
session_start();

if (isset($_SESSION["user"])) {
   echo "<h1>welkom op de website ".$_SESSION['user']["naam"];
   echo "<p><a href='opdracht01.php'>login pagina</a></p>";
} else {
    header('location: opdracht01.php');
}