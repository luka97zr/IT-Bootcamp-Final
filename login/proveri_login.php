<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Document</title>
</head>
<body>
        <div class='login_check'>
        <?php
        $username = $_GET['username'];
        $password = $_GET['password'];
        if(isset($_GET['remember_me']))
        $remember_me= $_GET['remember_me'];
        
        
        $baza = new mysqli('localhost','root','','projekat');
        $podaci = $baza->query("SELECT id from users WHERE username='$username' && password='$password'");
                if($podaci === false){
                echo "Ne postoje podaci o useru!" ;
                exit;
                }
        $niz = $podaci->fetch_all(MYSQLI_ASSOC);
        if(count($niz)===00){
            echo "<div class='wrong_pass--login'>";
            echo "<h1>Wrong username/password</h1>";
            echo "<a href='login_forma.php'>Try again</a>";
            echo "</div>";
                exit;
        }
        $id = $niz[0]['id'];

        if($remember_me == false)
          $_SESSION['login_id'] = $id;
        else
           setcookie('login_id',$id,time()+60*60*24*30,'/');   

        header("Location: ../shop.php");
        
?>        
</div>
</body>
</html>


