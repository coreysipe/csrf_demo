<?php
session_start();

// Simulate user authentication (replace with a proper authentication mechanism)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Display a simple form for updating user information
echo "Welcome, User $user_id!<br>";
echo '<form action="update_info.php" method="post">';
echo 'New Email: <input type="text" name="new_email" required>';
echo '<input type="submit" value="Update Email">';
echo '</form>';
?>
