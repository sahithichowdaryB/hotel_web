<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel_web";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert user data into the database
$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
