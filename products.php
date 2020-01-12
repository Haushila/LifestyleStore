<?php session_start();
$Price= "Price: Rs 36000"?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!--jQuery library--> 
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <style>
            .container-decor{
                height: 380px;
                width: 90%;
                overflow: auto;
            }
            .thumbnail img{
                height: 90px;
                width: 90px;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-fixed-top">
            <div class="container">
                
                    <a class="navbar-brand" href="index.php">LifeStyle Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
<span class="navbar-toggler-icon"></span>   
  </button>

<?php if(isset($_SESSION['email'])){?>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item"> <a class="nav-link" href="logout_script.php"> <span class="glyphicon glyphicon-log-out"></span>  Log Out</a></li>
                        <li class="nav-item">  <a class="nav-link" href="settings.php"> <span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li class="nav-item"> <a class="nav-link" href="cart.php"> <span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a></li>
                    </ul>
                </div><?php } ?>
                
            </div>
        </nav>
        <div class="container ">
            <div class="jumbotron">
                <h2>
                    Welcome to our Lifestyle Store!
                </h2>
                <p>
                    We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.
                </p>
            </div>
        </div>
        <div class="container container-decor">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a class="thumbnail">
                    <img src="img/cam1.jpg" alt="Cannon EOS">
                    <div class="caption">
                        <h4>
                            Cannon EOS
                        </h4>
                        <p>
                          <?php  echo $Price; ?>
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="thumbnail">
                    <img src="img/cam2.jpg" alt="Sony DSLR">
                    <div class="caption">
                        <h4>
                            Sony DSLR
                        </h4>
                        <p>
                            Price: Rs 40000
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="thumbnail">
                    <img src="img/cam3.jpg" alt="Sony DSLR">
                    <div class="caption">
                        <h4>
                            Sony DSLR
                        </h4>
                        <p>
                            Price: Rs 50000
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="thumbnail">
                    <img src="img/cam4.JPG" alt="Olympus DSLR">
                    <div class="caption">
                        <h4>
                            OLYMPUS DSLR
                        </h4>
                        <p>
                            Price: Rs 80000
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </a>
                
            </div>
        </div>
              <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/watch1.JPG" alt="Titan">
                    <div class="caption">
                        <h4>
                            Titan Model #301
                        </h4>
                        <p>
                            Price: Rs 13000
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </div>
            </div>
                  <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/watch2.jpg" alt="Titan">
                    <div class="caption">
                        <h4>
                            Titan Model #201
                        </h4>
                        <p>
                            Price: Rs 3000
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/watch3.jpg" alt="HMT Milan">
                    <div class="caption">
                        <h4>
                            HMT Milan
                        </h4>
                        <p>
                            Price: Rs 8000
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/watch4.jpg" alt="Faber Luba">
                    <div class="caption">
                        <h4>
                            Faber Luba#111
                        </h4>
                        <p>
                            Price: Rs 18000
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </div>
                  </div>
            
        </div>
              <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/shirt1.jpg" alt="">
                    <div class="caption">
                        <h4>
                            H&W
                        </h4>
                        <p>
                            Price: Rs 800
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </div>
            </div>
                <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/shirt2.jpg" alt="">
                    <div class="caption">
                        <h4>
                            Luis Phill
                        </h4>
                        <p>
                            Price: Rs 1000
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/shirt3.jpeg" alt="">
                    <div class="caption">
                        <h4>
                            John Zok
                        </h4>
                        <p>
                            Price: Rs 1500
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/shirt4.jpg" alt="">
                    <div class="caption">
                        <h4>
                            Jhalsani
                        </h4>
                        <p>
                           Price: Rs 1300
                        </p>
                        <div class="btn btn-primary btn-block">Add to Cart</div>
                    </div>
                </div>
                
            </div>
        </div>
            
        </div>
        <footer>
            <center>
                <div class="container">
                    <p>Copyright &copy; Lifestyle Store. All Rights Reserved | Contact Us: +919000000000</p>
                </div>
            </center>
        </footer>
    </body>
</html>
