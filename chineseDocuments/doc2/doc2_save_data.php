<?php
session_start();

// Database connection parameters

include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $participantSignatureData = $_POST['participantSignatureData'];
    $participantDate = $_POST['participantDate'];
    $parentSignatureData = $_POST['parentSignatureData'];
    $parentDate = $_POST['parentDate'];
    $selectedResortName = $_POST['selectedResortName'];
    $selectedInstructorLabel = $_POST['selectedInstructorLabel'];
    $diverAccidentInsurance = $_POST['diverAccidentInsurance'];
    $policyNumber = isset($_POST['policyNumber']) ? $_POST['policyNumber'] : null;

    // Retrieve the user ID from the session
    $userID = $_SESSION['userID'];

    // Insert the form data into the database
    $sql = "INSERT INTO doc2 (userID, participantSignature, participantDate, parentSignature, parentDate, resortName, instructorName, diverAccidentInsurance, policyNumber)
            VALUES ('$userID','$participantSignatureData', '$participantDate', '$parentSignatureData', '$parentDate', '$selectedResortName', '$selectedInstructorLabel', '$diverAccidentInsurance', '$policyNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Doc2 Form data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
