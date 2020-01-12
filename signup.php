<?php
//session_start();
$name=$email=$contact=$city=$address=$password='';
require ('includes/Common.php');
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>
<?php

//require( 'includes/Common.php');
$errors=array('name'=>'','email'=>'','pass'=>'','contact'=>'','city'=>'','address'=>'');
if(isset($_POST['Submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];

 if(empty($name)){
    $errors['name']= "Name is required <br />";
}else{
if(!preg_match('/^[a-zA-Z\s]+$/',$name))
{$errors['name']='Name must be letter';}
}
 if(empty($email)){
    $errors['email']="Email is required <br />";
}else{
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
 $errors['email']="Email mst be valide";
}
}
 if(empty($pass)){
    $errors['pass']="pass is required <br />";
}else{
if(!preg_match('/^[a-zA-Z\s]+$/',$pass))
{
$errors['pass']='Password must be character';
}
}
 if(empty($contact)){
    $errors['contact']= "contact is required <br />";
}else{
if(!preg_match('/^(\+\d{1,3}[-]?)?\d{10}$/',$contact))
{
$errors['contact']= 'Contactmust be numeric';
}
}
 if(empty($city)){
    $errors['city']="city is required <br />";
}else{
if(!preg_match('/^[a-zA-Z\s]+$/',$city))
{ $errors['city']='City name must be letter';}
}
 if(empty($address)){
  $errors['address']="address is required <br />";
}else{
if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$address))
$errors['address']= 'Address mst be letter wit commaseparation';
}
if(array_filter($errors))
{echo "Errors";
}
else{
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=mysqli_real_escape_string($con,$_POST['password']);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$query="INSERT INTO Customer(CustomerName,CustomerEmail,Password,Contact,City,Address) VALUES('$name','$email','$pass','$contact','$city','$address')";
if(mysqli_query($con,$query)){$_SESSION['email']=$_POST['email'];
header('Location: index.php'); 
}
else{
echo 'query error'.mysqli_error($con);
}
}
}


?>
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
          <!--        Latest compiled and minified CSS -->
        <style>
            .row_style{
                margin-top: 100px;
            }
        </style>
    </head>
    <body>

       <?php
require ('includes/header.php');
?>
 
<div class="container">       
            <div class="row row_style">
                <div class="col-xs-6">
                    <form method="POST" action="signup.php">
                        <h1>Sign Up</h1>
                        <div class="form-group has-warning">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $name;?>">  <span class="help-block"> <?php echo $errors['name'];?></span>                          
                        </div>
                        <div class="form-group has-warning">
                            <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $email;?>"> <div class="help-block"> <?php echo $errors['email'];?></div>  
                        </div>
                        <div class="form-group has-warning">
                            <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $password;?>">                         <div class="help-block"> <?php echo $errors['pass'];?></div>    
                        </div>
                        <div class="form-group has-warning">
                            <input type="text" class="form-control" placeholder="Contact" name="contact" value="<?php echo $contact;?>"><div class="help-block"> <?php echo $errors['contact'];?></div>        
                        </div>
                        <div class="form-group has-warning">
                            <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $city;?>">  <div class="help-block"> <?php echo $errors['city'];?></div>        
                        </div>
                        <div class="form-group has-warning">
                            <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $address;?>"> <div class="help-block"> <?php echo $errors['address'];?></div>            
                        </div>
                        <div class="form-group">
          <button class="btn btn-primary" name="Submit"> Submit</button>
          </div>
                    </form>
                </div>
            </div>
        </div>
        <?php require ('includes/footer.php');
?>        
    </body>
</html>
