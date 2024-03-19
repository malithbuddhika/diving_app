<?php
// Start the session
session_start();

// Initialize $userID to null
$userID = null;

// Check if UserId is set in the session
if (isset($_SESSION['userID'])) {
  $userID = $_SESSION['userID'];
  // You can now use $userID variable wherever needed in this file

  // Database connection parameters
  include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

  // Initialize $isUserDocument1 to false by default
  $isUserDocument0 = false;
  $isUserDocument1 = false;
  $isUserDocument2 = false;
  $isUserDocument3 = false;
  $isUserDocument4 = false;

   // Check if the user is logged in
   if ($userID !== null) {
    // Query to retrieve user ID from the database
    $userIdQuery0 = "SELECT userID FROM doc0 WHERE userID = $userID";
    $userIdResult0 = mysqli_query($conn, $userIdQuery0);

    // Check if the query returned any results
    if ($userIdResult0 && mysqli_num_rows($userIdResult0) > 0) {
      // User ID exists in the database
      $isUserDocument0 = true;
    }
  }
} else {
}

  // Check if the user is logged in
  if ($userID !== null) {
    // Query to retrieve user ID from the database
    $userIdQuery = "SELECT userID FROM doc1 WHERE userID = $userID";
    $userIdResult = mysqli_query($conn, $userIdQuery);

    // Check if the query returned any results
    if ($userIdResult && mysqli_num_rows($userIdResult) > 0) {
      // User ID exists in the database
      $isUserDocument1 = true;
    }
  } else {
  }

// Check if the user is logged in
if ($userID !== null) {
  // Query to retrieve user ID from the database
  $userIdQuery2 = "SELECT userID FROM doc2 WHERE userID = $userID";
  $userIdResult2 = mysqli_query($conn, $userIdQuery2);

  // Check if the query returned any results
  if ($userIdResult2 && mysqli_num_rows($userIdResult2) > 0) {
    // User ID exists in the database
    $isUserDocument2 = true;
  }
} else {
}

// Check if the user is logged in
if ($userID !== null) {
  // Query to retrieve user ID from the database
  $userIdQuery3 = "SELECT userID FROM doc3 WHERE userID = $userID";
  $userIdResult3 = mysqli_query($conn, $userIdQuery3);

  // Check if the query returned any results
  if ($userIdResult3 && mysqli_num_rows($userIdResult3) > 0) {
    // User ID exists in the database
    $isUserDocument3 = true;
  }
} else {
}

// Check if the user is logged in
if ($userID !== null) {
  // Query to retrieve user ID from the database
  $userIdQuery4 = "SELECT userID FROM doc4 WHERE userID = $userID";
  $userIdResult4 = mysqli_query($conn, $userIdQuery4);

  // Check if the query returned any results
  if ($userIdResult4 && mysqli_num_rows($userIdResult4) > 0) {
    // User ID exists in the database
    $isUserDocument4 = true;
  }
} else {
}

?>

<?php
// Define the current page based on the URL
$currentURL = $_SERVER['REQUEST_URI'];

// Extract the page name from the URL
$pageName = basename($currentURL, '.php');

// Set the current page based on the page name
switch ($pageName) {
  case 'doc0_view':
    $currentPage = 'doc0';
    break;
  case 'doc1_view':
    $currentPage = 'doc1';
    break;
  case 'doc2_view':
    $currentPage = 'doc2';
    break;
  case 'doc3_view':
    $currentPage = 'doc3';
    break;
  case 'doc4_view':
    $currentPage = 'doc4';
    break;
  default:
    $currentPage = ''; // Set a default value if the page name doesn't match any of the cases
    break;
}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb mt-2 mb-2">
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc0') ? 'active' : ''; ?>">
      <a href="/chineseDocuments/doc0/doc0_view.php" <?php echo ($currentPage !== 'doc0') ? 'style="color: blue;"' : ''; ?>>Step 1</a>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc1') ? 'active' : ''; ?>">
      <a href="/chineseDocuments/doc1/doc1_view.php" <?php echo ($currentPage !== 'doc1') ? 'style="color: blue;"' : ''; ?>>Step 2</a>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc2') ? 'active' : ''; ?>">
      <a href="/chineseDocuments/doc2/doc2_view.php" <?php echo ($currentPage !== 'doc2') ? 'style="color: blue;"' : ''; ?>>Step 3</a>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc3') ? 'active' : ''; ?>">
      <a href="/chineseDocuments/doc3/doc3_view.php" <?php echo ($currentPage !== 'doc3') ? 'style="color: blue;"' : ''; ?>>Step 4</a>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc4') ? 'active' : ''; ?>">
      <a href="/chineseDocuments/doc4/doc4_view.php" <?php echo ($currentPage !== 'doc4') ? 'style="color: blue;"' : ''; ?>>Step 5</a>
    </li>
  </ol>
</nav>


<!-- Separate button -->
<div class="row justify-content-end">
  <div class="col-md-auto">
    <button class="bi bi-house-fill" id="homeBtn" onclick="backtohome()"></button>
  </div>
</div>

<script>
  function backtohome() {
    window.location.href = '/index.php';
  }
</script>