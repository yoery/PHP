<?php

?>

<html>
<body>

<h2>Vul je temperatuur in celsius in, en zie hoeveel graden het is in fahrenheit</h2>

<form action="h04opdracht01.php" method="post">
    Celsius: <input id="getal" type="text" name="getal" value="">
    <input type="submit" name="button" value="Verstuur">

</form>

<h2>Vul een getal in, en zie of het deelbaar is door 3</h2>

<form action="h04opdracht02.php" method="post">
    Getal: <input id="getal" type="text" name="getal" value="">
    <input type="submit" name="button" value="Verstuur">

</form>

<h2>Vul een woord of zin in, en zie hoe het zichzelf omdraait!</h2>

<form action="h04opdracht03.php" method="post">
    Je zin: <input id="zin" type="text" name="zin" value="">
    <input type="submit" name="button" value="Verstuur">

</form>

<?php

function celsiusNaarFahrenheit($a) {
    $b = ($a *(9 /5)) + 32;
    echo $a." graden celsius is ".$b." graden fahrenheit";
}

//echo celsiusNaarFahrenheit($_POST['getal']);

function deelbaarDoorDrie($a) {
    if ($a % 3 == 0) {
        return "true";
    }
    else {
        return "false";
    }
}

//echo deelbaarDoorDrie($_POST['getal']);

function reverse($a) {
    $b = "";
    $word = strlen($a) -1;
    for ($i = $word; $i >= 0; $i--) {
        $b .= $a[$i];
    }
    return $b;
}

//echo reverse($_POST['zin']);
?>


</body>
</html>