<?php
session_start();

// Database connection parameters

include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Retrieve data from the form
$divemaster = $_POST['divemaster'];
$crewMember = $_POST['crewMember'];
$captain = $_POST['captain'];
$vesselName = $_POST['vesselName'];
$participantname = $_POST['participantname'];
$participantSignatureData = $_POST['participantSignatureData']; // Correct key
$participantDate = $_POST['participantDate'];
$parentSignatureData = $_POST['parentSignatureData']; // Correct key
$parentDate = $_POST['parentDate'];

// Retrieve the user ID from the session
$userID = $_SESSION['userID'];

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO doc1 (userID, divemaster, crewMember, captain, vesselName, participantname, participantSignature, participantDate, parentSignature, parentDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";



$stmt = $conn->prepare($sql);

// Check if preparing the statement was successful
if (!$stmt) {
  die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}

// Bind parameters
$stmt->bind_param("isssssssss", $userID, $divemaster, $crewMember, $captain, $vesselName, $participantname, $participantSignatureData, $participantDate, $parentSignatureData, $parentDate);
// Execute the statement
if ($stmt->execute()) {
  echo "Data saved successfully!";

} else {
  // Display error message using Bootstrap alert
  echo '<div class="alert alert-danger" role="alert">
            Error: ' . $sql . '<br>' . $stmt->error . '
          </div>';
}

$stmt->close();

error_reporting(E_ALL);
ini_set('display_errors', 1);


$conn->close();
