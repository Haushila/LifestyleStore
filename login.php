<?php
require ('includes/Common.php');
if (isset($_SESSION['email'])) {
header('location: products.php');
} ?>
<html style="height: 100%">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       <link rel="stylesheet" type="text/css" href="index.css">
        <style>
            .row_style{
                margin-top: 100px;
            }
        </style>
    </head>
    <body style="position: relative;padding-bottom: 60px;min-height: 100vh;"> <!--
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">LifeStyle Store</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a href="signup.php"> <span class="glyphicon glyphicon-user"></span>  Sign Up</a></li>
                        <li>  <a href="login.php"> <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
                
            </div>
        </div>-->
        <?php require('includes/header.php'); ?>
       
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
  <div class="panel-heading">
      <h3 class="panel-title"> LOGIN </h3>
  </div>
  <div class="panel-body">
      <p class="text-warning">Login to make a purchase</p>
      <form method="POST" action="Login_Submit.php">
          <div class="form-group">
          <input type="text" placeholder="Email" class="form-control" name="email">
          </div>
          <div class="form-group">
          <input type="password" placeholder="Password" class="form-control" name="pass">
          </div>
          <div class="form-group">
          <button class="btn btn-primary" name="submit">Login</button>
          </div>
      </form>
      
      <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
  </div>
        </div>  
                </div>
                    <?php 

               echo " <div class=\"col-xs-6\">
                  ";
      $fulurl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      if(strpos($fulurl, "signup=email"))
      {
        echo "<div class=\"alert alert-danger\"><strong><p> Email is not correct</p>";
        
        exit();
      }
       elseif(strpos($fulurl, "signup=pass"))
      {
        echo "<div class=\"alert alert-danger\"><strong><p> Password is incorrect</p>";
               exit();
      }

elseif(strpos($fulurl, "signup=notfound"))
      {
        echo "<div class=\"alert alert-danger\"><strong><p> User account notfound</p>";
       
        exit();
      }
      echo "</strong></div>
                </div>";
 
      ?> 
                </div>
            
        </div>          
  <?php
require ('includes/footer.php');
?>
         
  </body>
        </html>
