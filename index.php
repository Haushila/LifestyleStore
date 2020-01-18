<?php
include ('includes/Common.php');
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html style="height: 100%;">
    <head>
        <title>LifeStyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link href="index.css" type="text/css" rel="stylesheet">
    </head>
    <body style="height: 100% ; position: relative;">
        <?php
             include( 'includes/header.php');
         ?>
    
            <div id="banner_image">
            <div class="container"><div class="row">
                <div class="col-sm-4 col-lg-4"></div>
                <div class="col-sm-4 col-sm-offset-4 col-lg-4 col-lg-offset-2">
                <div class="banner_content">
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div></div>
       </div>
        </div>
    
       <?php
            include('includes/footer.php');

            ?>
    </body>
</html>
