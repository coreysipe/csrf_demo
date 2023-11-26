<?php
session_start();

// Simulate user authentication (replace with a proper authentication mechanism)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Process the form for updating user information
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_email'])) {
    $new_email = $_POST['new_email'];
    // Update user information (for demo purposes, just display the new email)
    echo "User information updated. New Email: $new_email";
} else {
    echo "Invalid request.";
}
?>
