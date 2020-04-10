<!DOCTYPE html>
<html lang="en">
<head>
  <title>news for U</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
<?php
require "connection.php"; 

$query = "SELECT * FROM news WHERE Published=0  ORDER BY DatePosted DESC" ;
$news = mysqli_query($conn , $query);
$new = mysqli_fetch_assoc($news);
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
  <?php
     $image = $new['Image'];
     echo " <img width = 80% height = 400px src=".$image ." class='img-fluid' alt='Responsive image'>";
  ?>
  </div>
</div>
  <?php
  $row = 2; 
  $divs = 4; 

  while ($row != 0)
  {
    
    echo '<div class="container-fluid bg-3 text-center">';
     echo ' <div class="row">';

     while ($divs!=0 )
     {
      $new = mysqli_fetch_assoc($news);
       echo '<div class="col-sm-3" >';
       echo "<a href = ''>";
       echo "<div style = 'height : 300px ; border: 1px solid #ddd; padding: 3px;'>";
       echo "<div height = '250px'>";
       echo '<img  src='.$new['Image'] ." ".'class="img-responsive" style="width:100% ; height : 250px" alt="Image">';
       echo "</div>";
       echo  '<p>'.$new["Title"].'</p>';
       echo '</div>';
       echo "</a>";
       echo '</div>'; 
       $divs--;
     }
    $row--;
    $divs = 4;
    echo '</div>';
    echo '</div><br>';
  }
  ?>


<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
