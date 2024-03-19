<?php
session_start(); // Start the session
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $language = $_POST["languageSelect"];

    // Define variables for name, passport, and birthday based on the selected language
    $name = '';
    $passport = '';
    $birthday = '';

    if ($language == 'english') {
        $name = $_POST["nameInputEn"];
        $passport = $_POST["passportInputEn"];
        $birthday = $_POST["birthdayInputEn"];
    } elseif ($language == 'chinese') {
        $name = $_POST["nameInputCh"];
        $passport = $_POST["passportInputCh"];
        $birthday = $_POST["birthdayInputCh"];
    }

    // Prepare and bind parameters to the statement
    $stmt = $conn->prepare("INSERT INTO user_data (name, passport_number, birthday, language) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $passport, $birthday, $language);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        // Store the participant's name in the browser's localStorage
        echo '<script>localStorage.setItem("participantName", "' . $name . '");</script>';

        // Retrieve the user ID from the database
        $userIDQuery = "SELECT id FROM user_data WHERE passport_number = ?";
        $userIDStmt = $conn->prepare($userIDQuery);
        $userIDStmt->bind_param("s", $passport);
        $userIDStmt->execute();
        $userIDResult = $userIDStmt->get_result();

        if ($userIDResult->num_rows > 0) {
            $row = $userIDResult->fetch_assoc();
            $userID = $row["id"];
            $_SESSION['userID'] = $userID;

            // Redirect based on language
            if ($language == 'english') {
                echo '<script>window.location.href = "/englishDocuments/doc0/doc0.php";</script>';
            } elseif ($language == 'chinese') {
                echo '<script>window.location.href = "/chineseDocuments/doc0/doc0.php";</script>';
            } else {
                echo '<script>window.location.href = "documentList.php";</script>';
            }
            exit();
        } else {
            echo "Error retrieving user ID";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
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
        <h2>Please fill in the following details / 请填写以下详细信息</h2>
        <!-- Add the form element with the method and action attributes -->
        <form id="languageForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <!-- Add Bootstrap form group for Language selection -->
            <div class="form-group">
                <label for="languageSelect">Select Language / 选择语言：</label>
                <!-- Add Bootstrap form-control class for styling -->
                <select class="form-control" id="languageSelect" name="languageSelect">
                    <option value="english">English</option>
                    <option value="chinese">Chinese</option>
                </select>
            </div>

            <!-- Container to load language-specific info dynamically -->
            <div id="infoContainer">

            </div>

        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js for dropdown functionality -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        // Function to load language-specific info dynamically
        function loadLanguageInfo(language) {
            var url = '';
            if (language === 'english') {
                url = 'englishInfo.php';
            } else if (language === 'chinese') {
                url = 'chineseInfo.php';
            }

            // Fetch the content of the selected language and load it into the infoContainer
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('infoContainer').innerHTML = data;
                })
                .catch(error => console.error('Error:', error));
        }

        // Load default language info on page load
        window.addEventListener('load', function() {
            var defaultLanguage = document.getElementById('languageSelect').value;
            loadLanguageInfo(defaultLanguage);
        });

        // Event listener for language selection change
        document.getElementById('languageSelect').addEventListener('change', function() {
            var selectedLanguage = this.value;
            loadLanguageInfo(selectedLanguage);
        });
    </script>


</body>

</html>