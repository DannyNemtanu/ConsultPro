<?php
session_start();
$_SESSION['message'] ='';

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
$db = mysqli_select_db($conn, 'proconsult');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
  echo '<script>console.log("Database Connection successfully!")</script>';
}
if (!$db){
    die("Database Selection Failed" . mysqli_error($conn));
}else{
    echo '<script>console.log("Database ProConsult Selected successfully!")</script>';
}

?>
