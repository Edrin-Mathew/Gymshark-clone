<?php
$host="localhost";
$user="root";
$password="";
$dbname="railway"; 

$conn=new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name=$_POST['name'];
    $passengers=$_POST['passengers'];
    $date=$_POST['date'];
    $sql="INSERT INTO tickets (PassengerName, NumberOfPass, BookingDate) VALUES (?, ?, ?)";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("sis", $name, $passengers, $date);
    if ($stmt->execute()) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>
