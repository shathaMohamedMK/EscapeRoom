<?php
$conn = new mysqli("localhost", "root", "", "userinformation");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name= $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

  
    $sql = "INSERT INTO userdata (name, email, pass) VALUES ('$name', '$email', '$pass')";
    
    if ($conn->query($sql)) {
        echo "Your Log in saved successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

	
}

$conn->close();
?>