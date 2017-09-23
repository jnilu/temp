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
            <h3 class="text-muted">Signup</h3>
        </div>

       
        <form method="post" action="signup.php">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" name="inputName" placeholder="Enter name" required="required">
            </div>

            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" required="required">
            </div>

            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name="inputPassword" placeholder="Password" required="required">
            </div>

           
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

   
    </div>
    <!-- /container -->



    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>




<?php
include("connection.php");
include("function.php");

global $conn;

if(isset($_POST['submit'])){
    
    user_registration($_POST['inputName'],$_POST['inputEmail'],$_POST['inputPassword']);
    
}

?>