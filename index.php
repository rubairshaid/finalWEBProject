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

$query = "SELECT * FROM news WHERE Published=0  ORDER BY DatePosted DESC LIMIT 9" ;
$news = mysqli_query($conn , $query);
$new = mysqli_fetch_assoc($news);
?>

<div class="jumbotron">
  <div class="container text-center">
  <?php
     $image = $new['Image'];
     echo "<a href = 'contentPage.php?ID=".$new["ID"]."'>";
     echo "<div>";
     echo " <img width = 80% height = 400px src=".$image ." class='img-fluid' alt='Responsive image'>";
     echo "<h2>".$new["Title"]."</h2>";
     echo"</div>";
     echo "</a>";
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
       echo "<a href = 'contentPage.php?ID=".$new["ID"]."'>";
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
