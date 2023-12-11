<?php
session_start();

$user ="admin";
$pass = "123456";

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

if ( ($user == $username) && ($pass == $password) ) {
    $_SESSION["username"] = $username;
    $_SESSION["login"] = 1;
    echo"Selamat datang kembali :".$username;
    echo"<br><a href='index.php>Ke Halaman Index</a>";
    echo"<a href='halaman2.php'>Ke halaman 2</a>";    
} else {
    die("you cannot acces this one");
}

?>