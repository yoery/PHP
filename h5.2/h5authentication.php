<?php

include ('h06opdr2connect.php');
$mail = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM login_formulier WHERE email = '$mail' AND password = '$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "login successful";
} else {
    echo "login failed";
}