<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
       <li> <a href="">Home</a></li>
       <li><a href="">Visited Places</a></li>
       <li><a href="">Booking</a></li>
       <li><a href="">Registartion</a></li>
       <li><a href="">Sign In</a></li>
    </ul>
    </nav>
    <h1>User List -</h1>
    <hr>
<?php
include 'connect.php';

$query= "SELECT * FROM first";
$run=mysqli_query($con,$query);

if(mysqli_num_rows($run) > 0 ){
    echo "<table><tr><th>NAME</th><th>PASSWORD</th><th>Options</th></tr>";
    while($row = mysqli_fetch_assoc($run)){
        echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td><button>Edit</button></td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 rows found";
}



?>
    
</body>
</html>
