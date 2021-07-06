<?php
include "klasa_Korpa.php";
include "../baza/Baza.php";

$ukupno = $k -> ukupno();
$id_korpe = $b -> snimi_korpu($_SESSION['login_id'],$ukupno);

for($i=0;$i<count($_SESSION['stavke_korpe']);$i++){
    $id_p=$_SESSION['stavke_korpe'][$i]['id'];
    $c_p=$_SESSION['stavke_korpe'][$i]['cena'];
    $kol_p=$_SESSION['stavke_korpe'][$i]['kolicina'];
    $b -> snimi_stavke_korpe($id_korpe,$id_p,$c_p,$kol_p);
}
header("Location: kupovina_kraj.php");





?>