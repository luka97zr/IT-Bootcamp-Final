<?php
session_start();

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $pwd = $_POST['password'];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if(emptyInputLog($username,$pwd) === true){
        header("Location:  login_forma.php?error=emptyinput" );
        exit();
    }

    loginUser($conn,$username,$pwd);

}else{
    header("Location:  login_forma.php" );
    exit();
}


