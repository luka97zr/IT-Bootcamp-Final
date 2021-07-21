<?php

if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $passRepeat=$_POST['passrepeat'];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup( $name,$username,$email,$pass, $passRepeat) !== false){

        header("Location:  register_form.php?error=emptyInput" );
        exit();
    }
    if(invalidUsser($username) !== false){
        header("Location:  register_form.php?error=invalidusername" );
        exit();
    }
    if(invalidEmail($email) !== false){
        header("Location:  register_form.php?error=invalidemail" );
        exit();
    }
    if(passMatch($pass,$passRepeat) !== false){
        header("Location:  register_form.php?error=passwordmatch" );
        exit();
    }
    if(userExists($conn,$username,$email) !== false){
        header("Location:  register_form.php?error=usernametaken" );
        exit();
    }

    createUser($conn,$name,$email,$username,$pass);
}
else
   header("Location: register_form.php");