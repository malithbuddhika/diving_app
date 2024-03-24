<?php
session_start();

// Database connection parameters
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Retrieve data from the form
$divemaster = $_POST['divemaster'];
$crewMember = isset($_POST['crewMember']) ? json_decode($_POST['crewMember']) : [];
$captain = $_POST['captain'];
$vesselName = $_POST['vesselName'];
$participantSignatureData = $_POST['participantSignatureData']; // Correct key
$participantDate = $_POST['participantDate'];
$parentSignatureData = $_POST['parentSignatureData']; // Correct key
$parentDate = $_POST['parentDate'];

// Retrieve the user ID from the session
$userID = $_SESSION['userID'];

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO doc1 (userID, divemaster, crewMember, captain, vesselName, participantSignature, participantDate, parentSignature, parentDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Check if preparing the statement was successful
if (!$stmt) {
    die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}

// Bind parameters
$crewMemberString = !empty($crewMember) ? implode(', ', $crewMember) : null;
$stmt->bind_param("issssssss", $userID, $divemaster, $crewMemberString, $captain, $vesselName, $participantSignatureData, $participantDate, $parentSignatureData, $parentDate);

// Execute the statement
if ($stmt->execute()) {
    echo "Data saved successfully!";
} else {
    // Display error message
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
