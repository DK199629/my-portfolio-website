<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio_website";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare the SQL query
$sql = "INSERT INTO form_submissions (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

// Execute the query and check success
if ($stmt->execute()) {
    echo "Thank you for your message!";
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
