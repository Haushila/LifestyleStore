<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!--jQuery library--> 
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<!--<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-
target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>-->
<div class="container">
<a class="navbar-brand" href="index.php">Lifestyle Store</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
<span class="navbar-toggler-icon"></span>   
  </button>


<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav text-center ml-auto">
<?php
if (isset($_SESSION['email'])) {
?>
<li class="nav-item"><a href = "cart.php" class="nav-link"><span class = "glyphicon glyphicon-shopping-
cart"></span> Cart </a></li>
<li class="nav-item"><a href = "settings.php" class="nav-link"><span class = "glyphicon glyphicon-user"></span>
Settings</a></li>
<li class="nav-item"><a href = "BootstrapAssignmnt/logout_script.php" class="nav-link"><span class = "glyphicon glyphicon-log-
in"></span> Logout</a></li>

<?php } else {
?>
<li class="nav-item"><a href="signup.php" class="nav-link"><span class="glyphicon glyphicon-user"></span>
Sign Up</a></li>
<li class="nav-item"><a href="login.php" class="nav-link"><span class="glyphicon glyphicon-log-in"></span>
Login</a></li>
<?php
}
?>
</ul>

</div>
</div>

</nav>
