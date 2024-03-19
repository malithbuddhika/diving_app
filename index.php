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
            d1.participantDate AS doc1_date,
            d2.participantDate AS doc2_date,
            d3.participantDate AS doc3_date,
            d4.participantDate AS doc4_date,
            (CASE WHEN d1.id IS NOT NULL THEN 'doc1 submitted' ELSE NULL END) AS doc1_status,
            (CASE WHEN d2.id IS NOT NULL THEN 'doc2 submitted' ELSE NULL END) AS doc2_status,
            (CASE WHEN d3.id IS NOT NULL THEN 'doc3 submitted' ELSE NULL END) AS doc3_status,
            (CASE WHEN d4.id IS NOT NULL THEN 'doc4 submitted' ELSE NULL END) AS doc4_status,
            d4.status AS doc4_approval_status
        FROM user_data u
        LEFT JOIN doc1 d1 ON u.id = d1.userID
        LEFT JOIN doc2 d2 ON u.id = d2.userID
        LEFT JOIN doc3 d3 ON u.id = d3.userID
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
    $searchResults .= "Doc1 : " . $row["doc1_status"] . " (Submitted on: " . $row["doc1_date"] . ")<br>";
    $searchResults .= "Doc2 : " . $row["doc2_status"] . " (Submitted on: " . $row["doc2_date"] . ")<br>";
    $searchResults .= "Doc3 : " . $row["doc3_status"] . " (Submitted on: " . $row["doc3_date"] . ")<br>";
    $searchResults .= "Doc4 : " . $row["doc4_status"] . " (Submitted on: " . $row["doc4_date"] . ")<br>";
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h4>Applications for Diving </h4>
        <button class="btn btn-primary" onclick="apply()">Apply</button>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-6">
        <h6>Application Verification</h6>
        <form id="searchForm" method="GET">
          <div class="form-group">
            <label for="ppNumber">Enter PP Number:</label>
            <input type="text" class="form-control" id="ppNumber" name="ppNumber" placeholder="PP">
          </div>
          <button type="button" class="btn btn-primary" onclick="search()">Search</button>
        </form>
      </div>
    </div>
    <br><br>
    <?php
    // Display search results or "No results found" message
    if ($showResults) {
      echo $searchResults;
      // Show the "View Document" button
      echo '<div class="row mt-4"><div class="col-md-6"><button class="btn btn-primary" onclick="view_document()">View Documents</button></div></div>';
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['ppNumber'])) {
      echo "No results found";
    }
    ?>
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