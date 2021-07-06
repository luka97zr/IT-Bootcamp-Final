
<?php 
    include "Baza.php";
    
    class Proizvod{
        public  $ime,$slika,$opis,$cena,$tip,$barkod;

        function __construct($proizvodi){
            $this->ime = $proizvodi['ime'];
            $this->slika = $proizvodi['slika'];
            $this->opis = $proizvodi['opis'];
            $this->cena = $proizvodi['cena'];
            $this->tip = $proizvodi['tip'];
            $this->barkod=$proizvodi['barkod'];
        }

        function prikazi_proizvod(){?>
            <div class='shop_products' data-aos="zoom-in" data-aos-duration="500">
            <h1><?=$this->ime?></h1>
            <div class='shop_products--img'style="background:url('images/coffe/<?=$this->slika?>') no-repeat center / contain"></div>
            <span><?=$this->cena?>$</span><br>
            <a href="/Frontend%20Mentor/webshop/detaljnije.php?id=<?=$this->barkod?>">Details</a>
            </div>
      <?php  } 
        function prikazi_proizvod_detaljnije(){?>
            <div class='shop_products--detail'>
            <h1><?=$this->ime?></h1>
            <div class='shop_products--detail--img'style="background:url('images/coffe/<?=$this->slika?>') no-repeat center / contain"></div>
            <p><?=$this->opis?></p>
            <span><?=$this->cena?>$</span><br>
            <form action="korpa/promena_korpe.php">
                <input type="hidden" name="akcija" value="dodaj">
                <input type="hidden" name="id_proizvoda" value="<?=$this->barkod?>">
                <a href="#" onclick="this.parentNode.submit();">Add to cart</a>
                <a href="shop.php#shop">Back to Shop</a>
            </form>
           </div>
      <?php  } 
    }

    class ListaProizvoda{
        public $p;
        
        function __construct(){
            $this->p = [];
        }
        function dodaj_proizvode($proizvodi){
            for($i=0; $i<count($proizvodi); $i++){
                $pr = new Proizvod($proizvodi[$i]);
                array_push($this->p, $pr);
            }

        }
        function prikazi_sve_proizvode($grupa ="" ){
            foreach($this->p as $jedan_proizvod)
                if($jedan_proizvod->tip == $grupa || $grupa == "" )
                    $jedan_proizvod->prikazi_proizvod();
        }

        function prikazi_jedan_proizvod_detaljnije($id){
            for($i=0; $i<count($this->p); $i++){
                if($this->p[$i]->barkod == $id)
                    $this->p[$i]->prikazi_proizvod_detaljnije();
            }
        }
    }

    $lp = new ListaProizvoda();
    $lp->dodaj_proizvode($proizvodi);    
    
    
?>