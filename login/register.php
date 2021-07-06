<?php
include "../baza/Baza.php";


$name = $_GET['name'];
$email = $_GET['email'];
$user = $_GET['username'];
$pass = $_GET['password'];

if((!isset($_GET['name']) || !isset($_GET['email']) || !isset($_GET['username']) || !isset($_GET['password'])))
    echo "<p>Please fill in all fields</p>";
else
$b -> registruj($name,$email,$user,$pass);
?>