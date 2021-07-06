<?php
include "../korpa/klasa_Korpa.php";
unset($_SESSION['login_id']);
unset($_SESSION['stavke_korpe']);
setcookie('login_id',0,time()-60*60*24,"/");
header("Location: ../shop.php");
?>