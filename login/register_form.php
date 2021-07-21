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
        <form action="register.php" method="POST" >
            <h1>Registration</h1>
            <p class='not-style'>Fill in form with correct values</p>
            <input type="text" name="name" id="name"placeholder="name" required>
            <input type="email" name="email" id="email"placeholder="e-mail" required>
            <input type="text" name="username" id="username" placeholder="username" required>
            <input type="password" name="pass" id="password" placeholder="password" required>
            <input type="password" name="passrepeat" id="password-repeat" placeholder="reenter password" required>
            <!-- <a href="#" name="button-submit" onclick="this.parentNode.submit();"> Submit</a> -->
            <input type="submit" value="Register" id="register" name="submit"class="button-submit">
            <a href="login_forma.php">Login</a>

            <?php

    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyInput")
            echo "<p>Fill in all fields!</p>";
        elseif($_GET['error'] == "invalidusername")
            echo "<p>Choose a proper username!</p>";
        elseif($_GET['error'] == "invalidemail")
            echo "<p>Choose a proper email!</p>";
        elseif($_GET['error'] == "passwordmatch")
            echo "<p>Password doesn't match!</p>";
        elseif($_GET['error'] == "usernametaken")
            echo "<p>Username is already taken!</p>";
        elseif($_GET['error'] == "stmfailed")
            echo "<p>Something went wrong, try again!</p>";
        elseif($_GET['error'] == "none")
            echo "<p style='color:blue'>You have signed up!</p>";
    }
    ?>
        </form>
    </div>
</div>

</body>
</html>

