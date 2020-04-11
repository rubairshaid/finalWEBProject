<?php
    require "connection.php";

if (!isset($_POST["title"]) || !isset($_POST["body"]) || !isset($_POST["category"]) || !isset($_POST["image"]) ) 
{
    header ("location:ASTable.php");
}

$id = $_POST["id"];
$title = $_POST["title"];
$body = $_POST["body"];
$category = $_POST["category"];
$image = $_POST["image"];
$published = $_POST["Published"];

$query = "UPDATE news SET  Title='$title' , Body='$body' ,Published=$published , Category='$category' , Image='$image' WHERE ID=$id ";

$result = mysqli_query($conn , $query);
if($result)
{
    header ("location:ASTable.php");
}
else
{
    echo "ERROR" .mysqli_error($conn);
}
?>