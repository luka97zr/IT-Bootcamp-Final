<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/scroll.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "header.php";
    include "baza/Proizvod.php";
    echo zaglavlje('Main','index','shop','Testemonials','','');
    // $jg= array_unique(array_column($proizvodi,'tip'));
    ?>
    
    <div class="shop_groups">
    <h1>Choose your favourite group</h1>
    <ul class="shop_groups--menu">
      <?php
      echo "<li><a href='shop.php#shop'>All</a></li>";
      echo "<li><a href='shop.php?tip=Black#shop'>Black</a></li>";
      echo "<li><a href='shop.php?tip=Arabica#shop'>Arabica</a></li>";
      echo "<li><a href='shop.php?tip=Robusta#shop'>Robusta</a></li>";
      ?>
    </ul>
    </div>

    <section class="shop_wrapper" id="shop">
    <?php
      $grupa=(isset($_GET['tip']))? $_GET['tip'] : "";
      $lp->prikazi_sve_proizvode($grupa); 
     ?>

    </section>
  
    <section class="testemonials">
  <h2>our friends testemonials</h6>

     <div class="testemonial-wrap" id="footer
     ">
       <article class="testemonial-1">
          <img src="images/image-emily.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequuntur officia praesentium possimus omnis nobis iusto.</p>
          <h3>Emily R.</h3>
          <p> Marketing Director</p>
         </article>
        <article class="testemonial-2">
            <img src="images/image-thomas.jpg">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat, libero! Lorem ipsum dolor sit amet.
            </p>
          <h3>Thomas S.</h3>
          <p> Chief Operating Officer</p>
        </article>
        <article class="testemonial-3">
            <img src="images/image-jennie.jpg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium distinctio fugit facere. Eum, amet autem.</p>
          <h3> Jennie F.</h3>
          <p>  
            Business Owner</p>
        </article>
     </div>
  </section>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>