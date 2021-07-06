<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/icon-fonts.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "header.php";
        echo zaglavlje('Shop','shop','index','Contact','<li><a href="index.php#type">About</a></li>',' <li><a href="index.php#products">Services</a></li>');
    ?>   
    <section class="coffee_type" id="type">
        <div class="coffee_type--first">
            <div class="coffee_type--block1">
                <img src="images/americano.png" alt="americano" data-aos="zoom-in">
                <h3>Americano</h3>   
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, adipisci.</p>    
            </div>   
            <div class="coffee_type--block2">
                <img src="images/cappuccino.png" alt="cappucino" data-aos="zoom-in">   
                <h3>Cappucino</h3>
                <p>Lorem ipsum dolor sit amet cons.Lorem ipsum dolor sit amet cons</p> 
            </div>  
            <div class="coffee_type--block3">
                <img src="images/late.png" alt="late" data-aos="zoom-in"> 
                <h3>Late</h3>  
                <p>Lorem ipsum dolor sit amet cons.Lorem ipsum dolor sit amet cons</p>
            </div>
        </div>
        <img src="images/coffe-bag.png"class="coffee_type--second">
        <div class="coffee_type--third">
            <div class="coffee_type--block4">
            <img src="images/moka.png" alt="moka"data-aos="zoom-in" > 
            <h3>Moka</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, adipisci.</p>
            </div>
            <div class="coffee_type--block5">
            <img src="images/ristreto.png" alt="ristretto"data-aos="zoom-in"> 
            <h3>Ristretto</h3>
            <p>Lorem ipsum dolor sit amet cons.Lorem ipsum dolor sit amet cons</p>
            </div>
            <div class="coffee_type--block6">
            <img src="images/espreso sa mlekom (flat white).png" alt="espresso flat white"data-aos="zoom-in">
            <h3>Espresso Flat White</h3>
            <p>Lorem ipsum dolor sit amet cons.Lorem ipsum dolor sit amet cons</p>
            </div>
        </div>
    </section>
    <section class="products" id=products>
        <div class="products_text">
            <h1>OUR PRODUCTS</h1>
            <div class=""></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, illum quos in ipsum delectus magni accusantium! Quisquam beatae similique adipisci.</p>
            <a href="shop.php#shop">Shop</a>
        </div>
    </section>
    <section class="quotes">
        <div class="quotes_content row-height" data-aos="fade-right"data-aos-duration="700">
            <q>I have measured out my life with coffee spoons.</q>
            <span>-T.S. Eliot</span>
          </div>   
          <div class="quotes_img1 row-height" ></div>     
          <div class="quotes_img2 row-height" ></div>
          <div class="quotes_content row-height"data-aos="fade-left"data-aos-duration="700">
            <q> It is inhumane, in my opinion, to force people who have a genuine medical need for coffee to wait in line behind people who apparently view it as some kind of recreational activity. </q>
              <span>-Dave Barry</span>
          </div>
        </section>
        <?php
        include "footer.php";
        echo podnozje();
    ?>   
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>