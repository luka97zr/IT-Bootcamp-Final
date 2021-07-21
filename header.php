<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/5d1f5fc735.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function zaglavlje($a,$b,$c,$d,$e,$f){?>
<header class="header">
        <nav class="header_nav">
            <div class="header_nav--logo"></div>
                <ul class="header_nav--menu">
                    <?=$e?>
                    <?=$f?>
                    <li><a href="<?=$b?>.php#shop"><?=$a?></a></li>
                    <li><a href="<?=$c?>.php#footer" class="btn-contact"><?=$d?></a></li>
                    <li><a id="img" href="korpa/korpa.php"><img src="images/cart.png"></a></li>
                    <?php
                        if(!isset($_SESSION['login_id'])){?>
                        <li class=header_nav--drop>
                            <span>Sign</span>
                            <ul class=header_nav--dropmenu>
                                <li><a href="login/register_form.php">SIGN UP</a></li>
                                <li><a href="login/login_forma.php">SIGN IN</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </ul>
                <?php
                        }else{?>
                            <li class="my_profile"><a href='#'>My profile</a>
                                <ul class="my_profile--dropmenu">
                                    <li><a href="login/log_out.php">Log out</a></li>
                                </ul>
                            </li>
                        <?php } ?>
        </nav>
        <div class="header_text">
            <img src="images/logo-main.png" alt="logo" class="header_text--logo">
            <h1>coffee heaven</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias nemo voluptas natus veritatis perspiciatis debitis aliquid error incidunt vero velit!</p>
        </div>
    </header>
    <?php }
            ?>
</body>
</html>