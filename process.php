<?php
$servername = "localhost";
$username = "root";  // Use your username here if not root
$password = "";      // Default password for XAMPP MySQL is empty
$dbname = "form_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect data from the form
$username = $_POST['username'];
$password = $_POST['password'];  // Normally you should hash passwords for security
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];

// Insert data into the database
$sql = "INSERT INTO form (username, password, phone_number, email) VALUES ('$username', '$password', '$phone_number', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>
