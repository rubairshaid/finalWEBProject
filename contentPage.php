<?php
require "connection.php"; 
if (!isset($_GET["ID"]))
{
  header("location:index.php");
}
$id = $_GET["ID"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class = "container" >
        <div class = "row">
          <?php
          $query = "SELECT * FROM news WHERE ID = $id";
          $result = mysqli_query ($conn , $query);
          $new = mysqli_fetch_assoc($result);
          echo ' <img style = "height: 350px; margin-top: 20px; width: 60%;" src="' . $new["Image"]. '" class="img-fluid" alt="Responsive image">';
          ?>
    </div>
    </div>
<div class="container">
  <?php
    echo "<h1>". $new["Title"]."</h1>";
  ?>
  <blockquote>
  <?php
    echo "<p style ='text-align: justify;'>".$new["Body"]."</p>";
  ?>    
  </blockquote>
</div>

</body>
</html>
