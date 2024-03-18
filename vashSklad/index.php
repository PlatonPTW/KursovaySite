<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="/img/lifestyleStore.png" />
        <title>Ваш Склад</title>
        <meta charset="UTF-8">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min1.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="/bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style1.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
            <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell .</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="/img/classic.jpg" alt="classic">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Классические мужские и женские костюмы</p>
                                        <p>Идеяльный выработанный столетиями классичский костюм подойдет для всех случаев в жизни.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="/img/sport.jpg" alt="sport">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Спортивные костюмы</p>
                                    <p>Помимо классики, к заказу доступни и помплекты спортивной одежды.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="/img/dress.jpg" alt="dress">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Женские платья</p>
                                   <p>Без внимания не остануться и прекрысная половина человечества. У нас можно заказать платья как для романтического вечера, так и для свадьбы.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
               <p>2023 Site by Petrov Platon</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>