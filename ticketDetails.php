<?php
$conn = new mysqli("localhost", "root", "", "userinformation");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $teamName = $_POST['teamName'];
    $members = $_POST['members'];
    $roomType = $_POST['roomType'];
	$date = $_POST['date'];

  
    $sql = "INSERT INTO ticketsde (teamName, members, roomType, date) VALUES ('$teamName', '$members', '$roomType', '$date')";
    
    if ($conn->query($sql)) {
        echo "Your tikect saved successfully!";
    } else {
        echo "Error " . $conn->error;
    }
	

}

$conn->close();
?>