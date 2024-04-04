<?php
// Start the session
session_start();

// Initialize $userID to null
$userID = null;

// Check if UserId is set in the session
if (isset($_SESSION['userID'])) {
  $userID = $_SESSION['userID'];
  // You can now use $userID variable wherever needed in this file
}

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
    $queries = [
        "SELECT userID FROM doc0 WHERE userID = $userID",
        "SELECT userID FROM doc1 WHERE userID = $userID",
        "SELECT userID FROM doc2 WHERE userID = $userID",
        "SELECT userID FROM doc3 WHERE userID = $userID",
        "SELECT userID FROM doc4 WHERE userID = $userID"
    ];
    
    // Execute queries to check user ID existence in respective tables
    for ($i = 0; $i < 5; $i++) {
        $userIdResult = mysqli_query($conn, $queries[$i]);
        // Check if the query returned any results
        if ($userIdResult && mysqli_num_rows($userIdResult) > 0) {
            // User ID exists in the database
            ${"isUserDocument$i"} = true;
        }
    }
}

// Finding the smallest number which is the user's ID not existing in the respective docX tables
$smallestNotExisting = 0;
while ($smallestNotExisting < 5 && ($isUserDocument0 || $isUserDocument1 || $isUserDocument2 || $isUserDocument3 || $isUserDocument4)) {
    switch ($smallestNotExisting) {
        case 0:
            if (!$isUserDocument0) break 2;
            break;
        case 1:
            if (!$isUserDocument1) break 2;
            break;
        case 2:
            if (!$isUserDocument2) break 2;
            break;
        case 3:
            if (!$isUserDocument3) break 2;
            break;
        case 4:
            if (!$isUserDocument4) break 2;
            break;
    }
    $smallestNotExisting++;
}

// Set navigation URLs based on whether the user's ID exists in respective tables
$pageURLs = [
    '/englishDocuments/doc0/doc0.php',
    '/englishDocuments/doc1/doc1.php',
    '/englishDocuments/doc2/doc2.php',
    '/englishDocuments/doc3/doc3.php',
    '/englishDocuments/doc4/doc4.php'
];

$viewURLs = [
    '/englishDocuments/doc0/doc0_view.php',
    '/englishDocuments/doc1/doc1_view.php',
    '/englishDocuments/doc2/doc2_view.php',
    '/englishDocuments/doc3/doc3_view.php',
    '/englishDocuments/doc4/doc4_view.php'
];

$readURLs = [
    '/englishDocuments/doc0/doc0_read.php',
    '/englishDocuments/doc1/doc1_read.php',
    '/englishDocuments/doc2/doc2_read.php',
    '/englishDocuments/doc3/doc3_read.php',
    '/englishDocuments/doc4/doc4_read.php'
];

?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb mt-2 mb-2">
    <?php for ($i = 0; $i < 5; $i++): ?>
      <li class="breadcrumb-item <?php echo ($smallestNotExisting === $i) ? 'active' : ''; ?>">
        <a <?php echo ($userID !== null && ${"isUserDocument$i"}) ? "href=\"$viewURLs[$i]\"" : "href=\"" . (($smallestNotExisting === $i && $userID !== null) ? $pageURLs[$i] : $readURLs[$i]) . "\""; ?>>
          <span <?php echo ($smallestNotExisting === $i) ? 'style="background-color: yellow; color: black; cursor: default;"' : (($userID !== null && ${"isUserDocument$i"}) ? 'style="background-color: black; color: white; cursor: default;"' : 'style="color: green; cursor: default;"'); ?>>Page <?php echo $i + 1; ?></span>
        </a>
      </li>
    <?php endfor; ?>
  </ol>
</nav>
