<?php
session_start();
include '../Controller/profile.php';

// Check if the user ID is provided in the URL
if(isset($_GET['user_id'])) {
    // Get the user ID from the URL
    $userId = $_GET['user_id'];

    // Create an instance of the usersC class
    $userController = new profile();

    // Call the getUserProfile method to fetch the user's profile
    $userProfile = $userController->getUserProfile($userId);

    // Display the user's profile
    if($userProfile) {
        // Display the name and email of the user
        echo "<h2>User Profile</h2>";
        echo "<p><strong>Name:</strong> " . $userProfile['nom_user'] . "</p>";
        echo "<p><strong>Email:</strong> " . $userProfile['email_user'] . "</p>";
    } else {
        echo "User profile not found.";
    }
} else {
    // Handle the case when the user ID is not provided in the URL
    echo "User ID not found in the URL.";
}
?>
