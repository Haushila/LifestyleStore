<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html style="height: 100%;">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
        <style>
            .row_style{
                margin-top: 100px;
            }
            table{
                border: 1px solid black;
                
                border-collapse: collapse; 
            }
            th,td,tr{
                border: 1px solid black;
                width: 120px;
                height: 40px;
                text-align: center;
            }
        </style>
    </head>
    <body style="height: 100%;">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="products.php">LifeStyle Store</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a href="index.php"> <span class="glyphicon glyphicon-log-out"></span>  Log Out</a></li>
                        <li>  <a href="settings.php"> <span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li> <a href="cart.php"> <span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="container">
            <div class="row row_style">
                <div class="col-sm-6">
        <table>
            <tr>
                <th>Item Number</th>
                <th>Item Name</th>
                <th>Price</th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Rs 0/-</td>
                <td><a href="success.php" class="btn btn-primary"> Confirm Order</a></td>
            </tr>
        </table>
                </div>
            </div>
        </div>
        <?php require('includes/footer.php')?>   </body>
</html>
