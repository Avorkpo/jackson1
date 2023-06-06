<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// create connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}

//get form
$name = $_POST["name"];
$email = $_POST["email"];

//prepare and execute the sql statement
$sql = "INSERT INTO users (name,email) VALUES('$name','$email')";

if($conn->query($sql)===TRUE){
    echo"data inserted successfully"; 
}
else{
    echo"error:".$sql. "<br>". 
    $conn->error;
}
// close connection
$conn->close();
?>