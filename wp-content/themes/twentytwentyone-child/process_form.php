<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$host = "localhost";  // Change if needed
$username = "root";   // Your MySQL username
$password = "";       // Your MySQL password
$database = "portfolio"; // Replace with your actual database name

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['user_email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate inputs
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    if (empty($message)) {
        die("Message field is empty");
    }

    // Prepare SQL query
    $stmt = $conn->prepare("INSERT INTO wp_contact_messages (email, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $message);

    // Execute query
    if ($stmt->execute()) {
        header("Location: thank-you.php");
        $stmt->close();
        exit();
    } else {
        die("Error: " . $stmt->error);
    }
}

$conn->close();
?>
