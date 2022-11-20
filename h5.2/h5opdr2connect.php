<?php

$servername = "localhost";
$dbname = "id17545548_phpschool";
$username = "id17545548_root";
$password = "b$?|v*YpEt?98|AL";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Failed to connect with database: ".mysqli_connect_error());
}

