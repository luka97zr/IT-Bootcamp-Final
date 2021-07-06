<?php
include "klasa_Korpa.php";
include "../baza/Baza.php";

if(isset($_GET['akcija']) && $_GET['akcija'] == 'dodaj'){
    $id = $_GET['id_proizvoda'];
    echo "$id";
    $proizvod = $b->daj_proizvod($id);
    $k->dodaj_proizvod($id, $proizvod['ime'], $proizvod['cena'], 1); 
}
if(isset($_GET['akcija']) && $_GET['akcija'] == 'smanji'){
    $id = $_GET['id_proizvoda'];
    $k->promeni_kolicinu($id, -1);        
}
if(isset($_GET['akcija']) && $_GET['akcija'] == 'obrisi'){
    $id = $_GET['id_proizvoda'];
    $k->obrisi_proizvod($id);
}
header("Location: korpa.php");

?>