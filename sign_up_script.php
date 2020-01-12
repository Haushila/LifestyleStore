<?php
session_start();
require( 'includes/Common.php');
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$errors=array('name'=>'','email'=>'','pass'=>'','contact'=>'','city'=>'','address'=>'');
if(isset($_POST['Submit'])){
 if(empty($name)){
    $errors['name']= "Name is required <br />";
}else{
if(!preg_match('/^[a-zA-Z\s]+$/',$name))
{$errors['name']='Title must be letter';}
}
 if(empty($email)){
    $errors['email']="email is required <br />";
}else{
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
 $errors['email']="Email mst be valide";
}
}
 if(empty($pass)){
    $errors['password']="pass is required <br />";
}else{
if(!preg_match('/^[a-zA-Z\s]+$/',$pass))
{
$errors['password']='Password must be character';
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
$errors['address']= echo 'Address mst be letter wit commaseparation';
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
