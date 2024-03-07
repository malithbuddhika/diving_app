<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $status = $_POST["status"]; // Assuming "status" is the name of your radio button
    $userID = $_POST['userID']; // Assuming you're retrieving userID from the form or session
    $medicalExaminerSignatureData = $_POST["medicalExaminerSignatureData"];
    $medicalUserId = $_SESSION['id'];


    $medicalExaminerSignatureDate = $_POST["medicalExaminerSignatureDate"];
  

    // Prepare the SQL statement with placeholders
    $sql2 = "UPDATE doc4 SET status = ?, medicalExaminerSignatureData = ?, medicalUserId = ?, medicalExaminerSignatureDate = ? WHERE userID = ? ORDER BY id DESC LIMIT 1"; // Replace 'doc4' with your actual table name

    // Prepare the statement
    $stmt = $conn->prepare($sql2);

    // Bind parameters
    $stmt->bind_param("ssssi", $status, $medicalExaminerSignatureData, $medicalUserId, $medicalExaminerSignatureDate, $userID);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Form data updated successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

?>
