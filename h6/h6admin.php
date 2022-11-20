<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["role"] == "Administrator") {
    echo "<h2>Welcome ".$_SESSION["user"] ["naam"]." to the Admin Page of the Website</h2>";
    echo "<p> <a href='h07login.php'>Login</a> </p>";
} else {
    header('location: h07login.php');
}