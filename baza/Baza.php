<?php

class Projekat{
    public $conn;

    function __construct($baza){
        $this -> conn = new mysqli('localhost','root','',$baza);
        if($this->conn->connect_error)
            die('Greska: '. $this->conn->connect_error);
        // else
        //     echo "Konektovan";
    }
    function izvrsi_select($upit){
        $podaci = $this->conn->query($upit);
        if($podaci===false)
            return['uspesno'=>false,'poruka'=>$this->conn->error];
        else{
            $niz = $podaci->fetch_all(MYSQLI_ASSOC);
            return['uspesno'=>true,'niz'=>$niz];
        }
    }
    function izvrsi_upit($upit){
            $odg = $this->conn->query($upit);
            if($odg == false)
                die("Greska upita.".$this->conn->error);
            else
                echo "Izvrsen upit";
        }
    function daj_proizvode(){
        $r = $this->izvrsi_select("SELECT * FROM `proizvodi`");
        if($r['uspesno']==true)
            return $r['niz'];
        else
        die("Neuspesan upit: ".$r['poruka']);
    }
    function daj_proizvod($id){
        $r = $this->izvrsi_select("SELECT * FROM `proizvodi` where barkod=$id");
        if($r['uspesno']==true)
            return $r['niz'][0];
        else
        die("Neuspesan upit: ".$r['poruka']);
    }
        
}
$b = new Projekat('projekat');
$proizvodi=$b->daj_proizvode();



    














?>