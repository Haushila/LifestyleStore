<?php
require ('includes/Common.php');
$email= $_SESSION['email'];
$errors =  array('pass' =>'' ,'passcheck'=>'' ); 
if(isset($_POST['submit'])){
$pass=$_POST['New_Password'];
$retype=$_POST['Re_type_Password'];
$passcheck=$_POST['passcheck'];
$changed='';
if($pass===$retype)
{ 
$email=mysqli_real_escape_string($con,$_SESSION['email']);
$passcheck=mysqli_real_escape_string($con,$_POST['passcheck']);
$query="SELECT * FROM Customer WHERE Password='$passcheck';";
if ($query_rslt=mysqli_query($con,$query)) {
    $no_of_rows=mysqli_num_rows($query_rslt);
if($no_of_rows === 0)
{
    $errors['passcheck']="Wrong Password Entered";
}
else{
    $row=mysqli_fetch_array($query_rslt);
    if($email===$row[2])
    {
        $newquery="UPDATE Customer SET Password='$pass' WHERE CustomerEmail='$email';";
        if(mysqli_query($con,$newquery))
            {$changed="Password changed";}
    }
}
}
else{
    echo "query error".mysqli_error($con);
}
}
else
{
$errors['pass']='Mis-Matched Password';
}
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
        <title>Settings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="index.css" type="text/css" rel="stylesheet">
        <style>
            .row_style{
                margin-top: 100px;
            }
            </style>
    </head>
    <body style="height: 100%;">
        <div class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="products.php">LifeStyle Store</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a href="logout_script.php"> <span class="glyphicon glyphicon-log-out"></span>  Log Out</a></li>
                        <li>  <a href="settings.php"> <span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li> <a href="cart.php"> <span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <form action="settings.php" method="POST">
                        <h1>Change Password</h1>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old_Password" name="passcheck">                            
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New_Password" name="New_Password">      <div><?php echo $errors['passcheck'];?></div>                      
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re_type_Password" name="Re_type_Password"> 
                            <div ><?php echo $errors['pass'];?></div>                           
                        </div>
                        
                        <div class="form-group">
                            
          <button class="btn btn-primary " name="submit">Change </button>
          </div><div><?php echo $changed; ?></div>
                    </form>
                </div>
            </div>
        </div>
         <?php require ('includes/footer.php')?>    </body>
</html>
