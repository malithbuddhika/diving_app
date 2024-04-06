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
    '/chineseDocuments/doc0/doc0.php',
    '/chineseDocuments/doc1/doc1.php',
    '/chineseDocuments/doc2/doc2.php',
    '/chineseDocuments/doc3/doc3.php',
    '/chineseDocuments/doc4/doc4.php'
];

$viewURLs = [
    '/chineseDocuments/doc0/doc0_view.php',
    '/chineseDocuments/doc1/doc1_view.php',
    '/chineseDocuments/doc2/doc2_view.php',
    '/chineseDocuments/doc3/doc3_view.php',
    '/chineseDocuments/doc4/doc4_view.php'
];

$readURLs = [
    '/chineseDocuments/doc0/doc0_read.php',
    '/chineseDocuments/doc1/doc1_read.php',
    '/chineseDocuments/doc2/doc2_read.php',
    '/chineseDocuments/doc3/doc3_read.php',
    '/chineseDocuments/doc4/doc4_read.php'
];

?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb mt-2 mb-2">
    <?php for ($i = 0; $i < 5; $i++): ?>
      <li class="breadcrumb-item <?php echo ($smallestNotExisting === $i) ? 'active' : ''; ?>" <?php if ($i === 0): ?>style="margin-left: -10px;"<?php endif; ?>>
        <a <?php echo ($userID !== null && ${"isUserDocument$i"}) ? "href=\"$viewURLs[$i]\"" : "href=\"" . (($smallestNotExisting === $i && $userID !== null) ? $pageURLs[$i] : $readURLs[$i]) . "\""; ?>>
          <span <?php echo ($smallestNotExisting === $i) ? 'style="background-color: yellow; color: black; cursor: default; border-radius: 5px; padding: 3px 8px 4px 8px;"' : (($userID !== null && ${"isUserDocument$i"}) ? 'style="background-color: #24ae2d; color: white; cursor: default; border-radius: 5px; padding: 3px 8px 4px 8px;"' : 'style="color: green; cursor: default; border-radius: 5px; padding: 3px 8px 4px 8px;"'); ?>>页面 <?php echo $i + 1; ?></span>
        </a>
      </li>
    <?php endfor; ?>
  </ol>
</nav>

<!-- Separate button -->
<?php
// Check if userID exists in all tables
$showButton = $isUserDocument0 && $isUserDocument1 && $isUserDocument2 && $isUserDocument3 && $isUserDocument4;
?>

<?php if ($showButton): ?>
<div class="row justify-content-end">
  <div class="col-md-auto">
    <button class="bi bi-house-fill" id="homeBtn" onclick="backtohome()"></button>
  </div>
</div>
<?php endif; ?>

<script>
  function backtohome() {
    window.location.href = '/index.php';
  }
</script>
