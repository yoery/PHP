<?php
session_start();

$users = array(
    "Lynn" => array("password" => "1717", "role" => "Administrator"),
    "Rianne" => array("password" => "1616", "role" => "User"),
    "Raphaël" => array("password" => "4004", "role" => "Administrator"),
);

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST["button"])
            && isset($users[$_POST["username"]])
            && $users[$_POST["username"]] ["password"] == $_POST["password"]) {
    $_SESSION["user"] = array("naam" => $_POST["username"],
                              "password" => $users[$_POST["username"]] ["password"],
                              "role" => $users[$_POST["username"]] ["role"]);
    $message = "Welcome ".$_SESSION["user"] ["naam"]." with the role "
                        .$_SESSION["user"] ["role"];
}   else {
    $message = "Log In";
}

?>

<html>
<style>
    #padd {
        margin-left: 3px;
    }
</style>
<body>

<h2><?php echo $message ?></h2>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Username <input type="text" name="username" value=""> <br>
    Password <input id="padd" type="password" name="password" value=""> <br>
    <input type="submit" name="button" value="Send">
</form>

<a href="h07website.php">Go to Website</a>
<br>
<a href="h07login.php?loguit">Log Out</a>
<br>
<a href="h07admin.php">Admin Page</a>

</body>
</html>
