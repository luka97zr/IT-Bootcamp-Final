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
        <form action="proveri_login.php">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="checkbox" name="remember_me">Check if you want to stay logged in <br>
            <a href="#" onclick="this.parentNode.submit();"> Log In</a>
            <a href="register_forma.php"> Register</a><br>
            <a href="../index.php">Back to Main</a>

        </form>
    </div>

</div>
</body>
</html>




