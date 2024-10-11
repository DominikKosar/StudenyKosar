<?php

$user = "Martin";
$pass = "heslo";
session_start();

if(isset($_SESSION["user"])){
    echo "<h1>Welcome " . $_SESSION['user'] . "</h1>";
    echo "<button action= "."logout.php".">Logout</button>";

}else{
    if($_POST['username'] == $user && $_POST['password'] == $pass){
        $_SESSION['user'] = $user;
    }
    else{
        echo "<script>alert ('username or password is incorrect')</script>";
    }
}