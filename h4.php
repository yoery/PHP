
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="opdr03response.php" method="post">
    Email <input type="text" name="email" value="">
    Wachtwoord <input type="password" name="wachtwoord" value="">
    <input type="submit" name="button" value="verstuur">
</form>

<form action="opdr02response.php" method="post">
    <select name="dieren[]">
        <option value="dier1">Motje</option>
        <option value="dier2">Rups</option>
        <option value="dier3">Zeepaard</option>
        <option value="dier4">Torretje</option>
        <option value="dier5">Bidsprinkhaan</option>
    </select>
    <input type="submit" name="knop">
</form>

<form action="opdr03response.php" method="post">
    Email <input type="text" name="email" value="">
    Wachtwoord <input type="password" name="wachtwoord" value="">
    <input type="submit" name="button" value="verstuur">
</form>


<?php

if ($_POST['inlognaam'] == "") {
    echo "vul een naam in";
    echo "<br> <a href='opdr01form1.html'>Terug naar formulier</a>";
}
if ($_POST['adres'] == "") {
    echo "vul je adres in";
    echo "<br> <a href='opdr01form1.html'>Terug naar formulier</a>";
}
if ($_POST['email'] == "") {
    echo "vul je email in";
    echo "<br> <a href='opdr01form1.html'>Terug naar formulier</a>";
}
if ($_POST['wachtwoord'] == "") {
    echo "vul een wachtwoord in";
    echo "<br> <a href='opdr01form1.html'>Terug naar formulier</a>";
}
    echo $_POST['inlognaam']."<br>";
    echo $_POST['adres']."<br>";
    echo $_POST['email'];

    foreach ($_POST['dieren'] as $dier) {
        echo "<img src='images/".$dier.".jpg'>";
  
  }

  
$mail = $_POST['email'];
$password = $_POST['wachtwoord'];

if (inlog($mail,$password)) {
    echo "welkom!";
} else {
    echo "geen toegang";
}

function inlog($mail, $pass): bool {
    if ($mail == "piet@worldonline.nl" && $pass == "doetje123" ||
        $mail == "klaas@carpets.nl" && $pass == "snoepje777" ||
        $mail == "truushendriks@wegweg.nl" && $pass == "arkiearkie201"
    )    {return true;}
    else {return false;}
}
?>
</body>
</html>