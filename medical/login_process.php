<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Fetching values from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Checking credentials
$sql = "SELECT id FROM medical_examiner WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start the session
    session_start();
    // Fetching the user's ID from the result set
    $row = $result->fetch_assoc();
    $medicalUserID = $row['id'];
    // Storing user information in session variables
    $_SESSION['id'] = $medicalUserID;
    // Redirecting to participant_list.php
    header("Location: participant_list.php");
    exit();
} else {
    echo "Invalid email or password";
}

$conn->close();
?>
