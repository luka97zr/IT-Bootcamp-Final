<?php
session_start();

if(!isset($_SESSION['stavke_korpe']))
    $_SESSION['stavke_korpe']=[];

class Korpa{
    public $stavke_korpe;

    function __construct(){
        $this->stavke_korpe = $_SESSION['stavke_korpe'];
    }
    function dodaj_proizvod($id, $naziv, $cena, $kolicina){
        $nasao=false;
        for($i=0;$i<count($this->stavke_korpe);$i++){
            if($this->stavke_korpe[$i]['id']==$id){
                $this->promeni_kolicinu($id,$kolicina);
                $nasao=true;
                break;
            }
        }
        if($nasao==false){
            $nova_stavka = ['id'=>$id, 'naziv'=>$naziv, 'cena'=>$cena, 'kolicina'=>$kolicina];
            array_push($this->stavke_korpe, $nova_stavka);
        }
        $_SESSION['stavke_korpe']=$this->stavke_korpe;
    }

    function promeni_kolicinu($id,$kol){
        for($i=0;$i<count($this->stavke_korpe);$i++){
            if($this->stavke_korpe[$i]['id']==$id){
            $this->stavke_korpe[$i]['kolicina'] += $kol;
                if($this->stavke_korpe[$i]['kolicina'] <= 0)
                $this->obrisi_proizvod($id);
                break;       
            }
        }
        $_SESSION['stavke_korpe']=$this->stavke_korpe;
    }
    
    function obrisi_proizvod($id){
        for($i=0; $i<count($this->stavke_korpe); $i++){
            if($this->stavke_korpe[$i]['id'] == $id){
                array_splice($this->stavke_korpe, $i, 1);
                break;
            }
        }
        $_SESSION['stavke_korpe'] = $this->stavke_korpe;
    }
    function prikazi(){
        if(($_SESSION['stavke_korpe'])!= []){ ?>
           <div class='cart_wrapper'>
           <table >
           <thead>
                    <tr>
                        <th>Product</th>   
                        <th>Price</th>   
                        <th>Amount</th>   
                        <th>Summary</th>   
                    </tr>
                 </thead>
            <?php
            $s = 0;
            for($i=0; $i<count($this->stavke_korpe); $i++){
                $u = $this->stavke_korpe[$i]['cena'] * $this->stavke_korpe[$i]['kolicina'];
                $s += $u;
                ?>
               
               <tr>
               <td><?=$this->stavke_korpe[$i]['naziv']?></td>
               <td><?=$this->stavke_korpe[$i]['cena']."$"?></td>
               <td><?=$this->stavke_korpe[$i]['kolicina']?></td>
               <td><?=$u?>$</td>
               <td><a href="promena_korpe.php?akcija=dodaj&id_proizvoda=<?=$this->stavke_korpe[$i]['id']?>">+</a></td>
               <td><a class ="red" href="promena_korpe.php?akcija=smanji&id_proizvoda=<?=$this->stavke_korpe[$i]['id']?>">-</a></td>
               <td><a class ="red" href="promena_korpe.php?akcija=obrisi&id_proizvoda=
                    <?=$this->stavke_korpe[$i]['id']?>"><i class="icon-basic-trashcan"></i></a></td>
               </tr>
        
        <?php    } ?>
           <tr><td colspan="3" style="text-align:right">SUMMARY:</td><td><?=$s?>.00$</td></tr>
           </table>
           <a href="../shop.php#shop">Back to Shop</a>
           <a href="">Proceed to Checkout</a>
           </div>
      <?php  }else{ ?>
            <div class="cart_wrapper--alert">
           <p class="empty-cart-alert">Your cart is empty!</p>
           <a href="../shop.php#shop">Back to shop</a>
           </div>

   <?php }

}
}
$k = new Korpa();
