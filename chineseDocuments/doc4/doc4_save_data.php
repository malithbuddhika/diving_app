<?php
session_start();

// Database connection parameters

include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';


// Retrieving form data
$q1 = $_POST['q1'];
$q1_1 = isset($_POST['q1_1']) ? $_POST['q1_1'] : '';
$q1_2 = isset($_POST['q1_2']) ? $_POST['q1_2'] : '';
$q1_3 = isset($_POST['q1_3']) ? $_POST['q1_3'] : '';
$q1_4 = isset($_POST['q1_4']) ? $_POST['q1_4'] : '';
$q1_5 = isset($_POST['q1_5']) ? $_POST['q1_5'] : '';

$q2 = $_POST['q2'];
$q2_1 = isset($_POST['q2_1']) ? $_POST['q2_1'] : '';
$q2_2 = isset($_POST['q2_2']) ? $_POST['q2_2'] : '';
$q2_3 = isset($_POST['q2_3']) ? $_POST['q2_3'] : '';
$q2_4 = isset($_POST['q2_4']) ? $_POST['q2_4'] : '';

$q3 = $_POST['q3'];

$q4 = $_POST['q4'];
$q4_1 = isset($_POST['q4_1']) ? $_POST['q4_1'] : '';
$q4_2 = isset($_POST['q4_2']) ? $_POST['q4_2'] : '';
$q4_3 = isset($_POST['q4_3']) ? $_POST['q4_3'] : '';
$q4_4 = isset($_POST['q4_4']) ? $_POST['q4_4'] : '';

$q5 = $_POST['q5'];

$q6 = $_POST['q6'];
$q6_1 = isset($_POST['q6_1']) ? $_POST['q6_1'] : '';
$q6_2 = isset($_POST['q6_2']) ? $_POST['q6_2'] : '';
$q6_3 = isset($_POST['q6_3']) ? $_POST['q6_3'] : '';
$q6_4 = isset($_POST['q6_4']) ? $_POST['q6_4'] : '';
$q6_5 = isset($_POST['q6_5']) ? $_POST['q6_5'] : '';

$q7 = $_POST['q7'];
$q7_1 = isset($_POST['q7_1']) ? $_POST['q7_1'] : '';
$q7_2 = isset($_POST['q7_2']) ? $_POST['q7_2'] : '';
$q7_3 = isset($_POST['q7_3']) ? $_POST['q7_3'] : '';
$q7_4 = isset($_POST['q7_4']) ? $_POST['q7_4'] : '';

$q8 = $_POST['q8'];
$q8_1 = isset($_POST['q8_1']) ? $_POST['q8_1'] : '';
$q8_2 = isset($_POST['q8_2']) ? $_POST['q8_2'] : '';
$q8_3 = isset($_POST['q8_3']) ? $_POST['q8_3'] : '';
$q8_4 = isset($_POST['q8_4']) ? $_POST['q8_4'] : '';
$q8_5 = isset($_POST['q8_5']) ? $_POST['q8_5'] : '';

$q9 = $_POST['q9'];
$q9_1 = isset($_POST['q9_1']) ? $_POST['q9_1'] : '';
$q9_2 = isset($_POST['q9_2']) ? $_POST['q9_2'] : '';
$q9_3 = isset($_POST['q9_3']) ? $_POST['q9_3'] : '';
$q9_4 = isset($_POST['q9_4']) ? $_POST['q9_4'] : '';
$q9_5 = isset($_POST['q9_5']) ? $_POST['q9_5'] : '';
$q9_6 = isset($_POST['q9_6']) ? $_POST['q9_6'] : '';

$q10 = $_POST['q10'];

$status = "Pending";

$participantSignatureData = $_POST['participantSignatureData']; // Correct key
$participantDate = $_POST['participantDate'];
$parentSignatureData = $_POST['parentSignatureData']; // Correct key
$parentDate = $_POST['parentDate'];

 // Retrieve the user ID from the session
 $userID = $_SESSION['userID'];

// Inserting data into database
$query = "INSERT INTO doc4 (userID,q1, q1_1, q1_2, q1_3, q1_4, q1_5, q2, q2_1, q2_2, q2_3, q2_4, q3, q4, q4_1, q4_2, q4_3, q4_4, q5, q6, q6_1, q6_2, q6_3, q6_4, q6_5, q7, q7_1, q7_2, q7_3, q7_4, q8, q8_1, q8_2, q8_3, q8_4, q8_5, q9, q9_1, q9_2, q9_3, q9_4, q9_5, q9_6, q10, status, participantSignatureData, participantDate, parentSignatureData, parentDate)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,? ,?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssss", $userID,$q1, $q1_1, $q1_2, $q1_3, $q1_4, $q1_5,$q2, $q2_1, $q2_2, $q2_3,$q2_4, $q3, $q4, $q4_1, $q4_2, $q4_3, $q4_4, $q5, $q6, $q6_1, $q6_2, $q6_3, $q6_4, $q6_5, $q7, $q7_1, $q7_2, $q7_3, $q7_4, $q8, $q8_1, $q8_2, $q8_3, $q8_4, $q8_5, $q9, $q9_1, $q9_2, $q9_3, $q9_4, $q9_5, $q9_6, $q10, $status, $participantSignatureData, $participantDate, $parentSignatureData, $parentDate);

if ($stmt->execute()) {
    echo "Data saved successfully!";

    
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
