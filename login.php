<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Back</a>
            </li>
          </ul>
        </nav>
        <!--<h3 class="text-muted">Project name</h3>-->
      </div>
      
      <form class="form-signin" action="login.php" method="post">
       
        <h2 class="form-signin-heading">Login</h2>
        
        <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" class="form-control" name="inputEmail" placeholder="Email address" required autofocus>
        </div>
        
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        
        <button class="btn btn-md btn-primary btn-block" type="submit" name="login">Sign in</button>
      </form>




    </div> <!-- /container -->




    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>








<?php
include("connection.php");
include("function.php");
session_start();

if(isset($_POST['login'])){
    
    user_login($_POST['inputEmail'],$_POST['inputPassword']);

}

?>