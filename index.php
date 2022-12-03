<?php
include 'connect.php';
mysqli_select_db($con,$db);
$name1 = $_POST["name"];
$email1 = $_POST["email"];
$password1 = $_POST["password"];

$query = "INSERT INTO first(name,email,password) VALUES ('$name1','$email1','$password1')";
$run=mysqli_query($con,$query);

if(!$run){
    echo "<br>Submission Failed";
}else{
    header("Location: fetch.php");
    exit();
}
?>