<?php
// Database connection
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Fetching values from the form
$name = $_POST['name'];
$degree = $_POST['degree'];
$clinic = $_POST['clinic'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

// Handling stamp image upload
$stampFileName = '';
if(isset($_FILES['stamp']) && $_FILES['stamp']['error'] === UPLOAD_ERR_OK) {
    $stampFileName = $_FILES['stamp']['name'];
    $stampTempName = $_FILES['stamp']['tmp_name'];
    $stampUploadPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $stampFileName;
    move_uploaded_file($stampTempName, $stampUploadPath);
}

// Inserting data into database
$sql = "INSERT INTO medical_examiner (name, degree, clinic, address, phone, email, password, stamp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $name, $degree, $clinic, $address, $phone, $email, $password, $stampFileName);

if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>

