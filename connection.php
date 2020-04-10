<?php
$servername = "localhost";
$username = "root";
$pass = "";
$DBName = "finalprojectdb";

$conn = mysqli_connect($servername , $username , $pass , $DBName );

if (!$conn)
    die ("can not connect to database " . mysqli_connect_error());

?>