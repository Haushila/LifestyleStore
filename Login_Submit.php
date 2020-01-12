<?php
require ('includes/Common.php');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['pass'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: ../public_html/login.php?signup=email');
  exit();
}
if (strlen($password) < 6) {
  header('location: ../public_html/login.php?signup=pass');
  exit();
}
$CustomerEmail = mysqli_real_escape_string($con, $email);
$Customerpassword = mysqli_real_escape_string($con, $password);
$query="SELECT CustomerID,CustomerEmail,Password FROM Customer WHERE CustomerEmail='".$CustomerEmail."' AND Password='".$Customerpassword."';";
$query_rslt=mysqli_query($con,$query);
printf("select returned %d rows",mysqli_num_rows($query_rslt));
$no_of_rows=mysqli_num_rows($query_rslt);
if($no_of_rows == 0)
{
	header('location: ../public_html/login.php?signup=notfound');
	exit();

echo "No User Found";
}
else
{
$row=mysqli_fetch_array($query_rslt);
$_SESSION['user_id']=$row[0];
$_SESSION['email']=$row[1];
header('location: products.php');
}
}
?>
