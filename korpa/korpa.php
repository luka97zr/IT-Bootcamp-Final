<?php
include "klasa_Korpa.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login_wrapper">
    <?php
    

    if(!isset($_SESSION['login_id'])){
        echo  "<h1 class='login_alert'>Oops,</h1>";
        echo  "<h1 class='login_alert'>Login First!</h1>";
        echo "<a href='../login/login_forma.php' class='login_alert--btn'>Log in</a>";
    }else{
        echo "<div class='cart_wrapper'>";
        $k->prikazi();

        echo" </div>";


    } 
    ?>
    </div>
</body>
</html>
<?php
