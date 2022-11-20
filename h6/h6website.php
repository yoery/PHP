<?php
session_start();

if (isset($_SESSION["user"])) {
    echo "<h2>Welcome ".$_SESSION["user"] ["naam"]." to the Website</h2>";
    echo "<p> <a href='h07login.php'>Login</a> </p>";
} else {
    header('location: h07login.php');
}