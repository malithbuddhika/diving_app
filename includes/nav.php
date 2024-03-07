<?php
// Start the session
session_start();

// Initialize $userID to null
$userID = null;

// Check if UserId is set in the session
if(isset($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];
    // You can now use $userID variable wherever needed in this file

    // Database connection parameters
    include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

    // Initialize $isUserDocument1 to false by default
    $isUserDocument1 = false;
    $isUserDocument2 = false;
    $isUserDocument3 = false;
    $isUserDocument4 = false;

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
}
else {
  
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
}
else {
  
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
}
else {
  
}

?>
<?php
// Define the current page based on the URL
$currentURL = $_SERVER['REQUEST_URI'];

// Set the current page based on the page path
switch ($currentURL) {
    case '/englishDocuments/doc1/doc1.php':
        $currentPage = 'doc1';
        break;
    case '/englishDocuments/doc2/doc2.php':
        $currentPage = 'doc2';
        break;
    case '/englishDocuments/doc3/doc3.php':
        $currentPage = 'doc3';
        break;
    case '/englishDocuments/doc4/doc4.php':
        $currentPage = 'doc4';
        break;
    default:
        $currentPage = ''; // Set a default value if the current URL doesn't match any of the cases
        break;
}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb mt-2 mb-2">
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc1') ? 'active' : 'disabled'; ?>">
      <span <?php echo ($currentPage === 'doc1') ? '' : 'style="color: green; cursor: default;"'; ?>>Step 1</span>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc2') ? 'active' : 'disabled'; ?>">
      <span <?php echo ($currentPage === 'doc2') ? '' : 'style="color: green; cursor: default;"'; ?>>Step 2</span>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc3') ? 'active' : 'disabled'; ?>">
      <span <?php echo ($currentPage === 'doc3') ? '' : 'style="color: green; cursor: default;"'; ?>>Step 3</span>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc4') ? 'active' : 'disabled'; ?>">
      <span <?php echo ($currentPage === 'doc4') ? '' : 'style="color: green; cursor: default;"'; ?>>Step 4</span>
    </li>
  </ol>
</nav>




