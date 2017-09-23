<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ../login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    
    
    <div class="container">
        
        
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Home</h3>
      </div>

      <div class="jumbotron">
        <h1 class="display-3">Welcome <?php echo($_SESSION['name']); ?></h1>
        <p class="lead"></p>
        <p><a class="btn btn-lg btn-success" href="cv.php" role="button">Create CV</a></p>
      </div>
        
        
        
    </div> <!-- /container -->




    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>