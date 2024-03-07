<?php
session_start(); // Start the session

$servername = "fdb1031.biz.nf";
$username = "4436081_app";
$password = "Malith@#123";
$dbname = "4436081_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["nameInput"];
    $passport = $_POST["passportInput"];
    $birthday = $_POST["birthdayInput"];
    $language = $_POST["languageSelect"];
    
        // Insert data into the database
        $insertQuery = "INSERT INTO user_data (name, passport_number, birthday, language) VALUES ('$name', '$passport', '$birthday', '$language')";

        if ($conn->query($insertQuery) === TRUE) {
            // Store the participant's name in the browser's localStorage
            echo '<script>localStorage.setItem("participantName", "' . $name . '");</script>';

            // Retrieve the user ID from the database
            $userIDQuery = "SELECT id FROM user_data WHERE passport_number = '$passport'";
            $userIDResult = $conn->query($userIDQuery);

            if ($userIDResult->num_rows > 0) {
                $row = $userIDResult->fetch_assoc();
                $userID = $row["id"];
                $_SESSION['userID'] = $userID;

                if ($language == 'english') {
                    echo '<script>window.location.href = "/englishDocuments/doc1/doc1.php";</script>';
                } elseif ($language == 'chinese') {
                    echo '<script>window.location.href = "documentListChinese.php";</script>';
                } else {
                    echo '<script>window.location.href = "documentList.php";</script>';
                }
                exit();
            } else {
                echo "Error retrieving user ID";
            }
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    
}

// Close the connection
$conn->close();
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Add Bootstrap CDN link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Enter Details</h2>
        <!-- Add the form element with the method and action attributes -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <!-- Add Bootstrap form group for Name input -->
            <div class="form-group">
                <label for="nameInput">Enter Nama:</label>
                <!-- Add Bootstrap form-control class for styling -->
                <input type="text" class="form-control" name="nameInput" id="nameInput" placeholder="Enter your name" required>
            </div>

            <!-- Add Bootstrap form group for PP Number input -->
            <div class="form-group">
                <label for="passportInput">Enter PP Number:</label>
                <!-- Add Bootstrap form-control class for styling -->
                <input type="text" class="form-control" name="passportInput" id="passportInput" placeholder="Enter your passport number" required>
            </div>

            <!-- Add Bootstrap form group for Select Day selection -->
            <div class="form-group">
                <label for="birthdayInput">Select Day:</label>
                <!-- Add Bootstrap form-control class for styling -->
                <input type="date" class="form-control" id="birthdayInput" name="birthdayInput">
            </div>


            <!-- Add Bootstrap form group for Language selection -->
            <div class="form-group">
                <label for="languageSelect">Select Language:</label>
                <!-- Add Bootstrap form-control class for styling -->
                <select class="form-control" id="languageSelect" name="languageSelect">
                    <option value="english">English</option>
                    <option value="chinese">Chinese</option>
                </select>
            </div>

            <!-- Add Bootstrap button for styling -->
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js for dropdown functionality -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        document.getElementById("nameInput").focus(); // set focus on the name input field
    </script>
</body>

</html>