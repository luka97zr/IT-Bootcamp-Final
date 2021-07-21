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
<div class='login_wrapper'>
    <div class="login_form">
        <form action="login_check.php" method="post">
            <h1>Please Log In</h1>
            <p class='not-style'>Fill in form with correct values</p>
            <input type="text" name="username" placeholder="username/email">
            <input type="password" name="password" placeholder="password">
            <!-- <input type="checkbox" name="remember_me">Check if you want to stay logged in <br> -->
            <input type="submit" value="Log in" id="register" name="submit"class="button-submit">
            <a href="register_form.php"> Register</a><br>
            <a href="../index.php">Back to Main</a>

        <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "emptyinput")
                 echo "<p>Fill in all fields!</p>";
            elseif($_GET['error'] == "wronglogin")
                echo "<p>Incorrect login information!</p>";
            elseif($_GET['error'] == "wrongpwd")
                echo "<p>Incorrect password!</p>";
        }
        ?>
        </form>
    </div>

</div>
</body>
</html>




