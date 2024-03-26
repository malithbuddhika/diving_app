<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Start session
session_start();

// Initialize variables
$searchResults = "";
$showResults = false;

// Check if the form is submitted and ppNumber is set
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['ppNumber'])) {
  // Retrieve the value of ppNumber from the form submission
  $passport_number = $_GET['ppNumber'];

  // Prepare the SQL query
  $sql = "SELECT u.id AS userID, u.name, u.passport_number,
            d4.participantDate AS doc4_date,
            (CASE WHEN d4.id IS NOT NULL THEN 'doc4 submitted' ELSE NULL END) AS doc4_status,
            d4.status AS doc4_approval_status
        FROM user_data u
        LEFT JOIN doc4 d4 ON u.id = d4.userID
        WHERE u.passport_number = '$passport_number'
        ORDER BY u.id DESC
        LIMIT 1";

  // Execute the query
  $result = $conn->query($sql);

  // Check if the query was successful
  if ($result !== false && $result->num_rows > 0) {
    // Set flag to indicate that results should be shown
    $showResults = true;

    // Fetch the user information
    $row = $result->fetch_assoc();

    // Assign userID to session
    $_SESSION['userID'] = $row['userID'];

    // Build the search results HTML
    $searchResults .= "Name: " . $row["name"] . "<br>";
    $searchResults .= "PP Number: " . $row["passport_number"] . "<br>";
    // Display Approval Status of Doc4
    $searchResults .= "Approval Status: " . $row["doc4_approval_status"] . "<br>";

    // Display document statuses and submission dates
    $searchResults .= "Submitted on: " . $row["doc4_date"];
  } else {
    // If no results found, set flag to indicate no results
    $showResults = false;
  }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Home</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    body {
      overflow-x: hidden;
      position: relative;
      min-height: 100vh;
      background-image: url('/background.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: bottom center;
      /* Set background position to bottom center */
      background-size: cover;
    }

    #main {
      position: absolute;
      top: 15px;
      left: 50%;
      transform: translateX(-50%);
      padding: 5px;
      border-radius: 10px;
      width: 85%;
    }

    #logo img {
      width: 100px;
      /* Adjust width as needed */
      height: auto;
      /* Maintain aspect ratio */
    }

    .bg-text {
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      max-width: 600px;
      padding-top: 8px;
      padding-bottom: 8px;
    }
  </style>
  </style>
</head>

<body>
  <div id="main">

    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-4" id="logo">
          <img src="/logo_company.png" alt="Logo">
        </div>
        <div class="col-md-8 col-sm-8 col-8 mt-2" id="title">
          <h4>Welcome to </h4>
          <h4><strong>SATORI CLUB</strong></h4>
        </div>
      </div>
    </div>

    <h6 class="mt-2">Dive into adventure with our club! Explore the depths and discover a whole new world beneath the waves. Join us for thrilling dives and unforgettable experiences.</h6>
    <div class="row">
      <div class="col-md-6">
        <button class="btn btn-primary" onclick="apply()">Apply for Diving</button>
      </div>
    </div>

    <div class="row mt-4 bg-text">
      <div class="col-md-6">
        <h6>Check your application status</h6>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="ppNumber" placeholder="Enter PP Number" aria-label="PP number" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" onclick="search()" type="button">Search</button>
          </div>
        </div>
      

      <?php
      // Display search results or "No results found" message
      if ($showResults) {

        echo  '<div>' . $searchResults . '</div>';
        // Show the "View Document" button
        echo '<div class="row mt-4"><div class="col-md-6"><button class="btn btn-primary" onclick="view_document()">View Documents</button></div></div>';
      } elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['ppNumber'])) {
        echo "No results found";
      }
      ?>
    </div>
    </div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function apply() {
      window.location.href = 'info.php';
    }

    function search() {
      // Retrieve the value of ppNumber from the input field
      var ppNumber = document.getElementById("ppNumber").value;

      // Redirect to the same page with the pp number as a query parameter
      window.location.href = 'index.php?ppNumber=' + ppNumber;
    }

    function view_document() {
      window.location.href = '/englishDocuments/doc0/doc0_view.php';
    }
  </script>

</body>

</html>