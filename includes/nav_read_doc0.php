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
      <a href="/englishDocuments/doc0/doc0.php" <?php echo ($currentPage !== 'doc0') ? 'style="color: blue;"' : ''; ?>>Page 1</a>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc1') ? 'active' : ''; ?>">
      <a href="/englishDocuments/doc1/doc1_read.php" <?php echo ($currentPage !== 'doc1') ? 'style="color: blue;"' : ''; ?>>Page 2</a>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc2') ? 'active' : ''; ?>">
      <a href="/englishDocuments/doc2/doc2_read.php" <?php echo ($currentPage !== 'doc2') ? 'style="color: blue;"' : ''; ?>>Page 3</a>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc3') ? 'active' : ''; ?>">
      <a href="/englishDocuments/doc3/doc3_read.php" <?php echo ($currentPage !== 'doc3') ? 'style="color: blue;"' : ''; ?>>Page 4</a>
    </li>
    <li class="breadcrumb-item <?php echo ($currentPage === 'doc4') ? 'active' : ''; ?>">
      <a href="/englishDocuments/doc4/doc4_read.php" <?php echo ($currentPage !== 'doc4') ? 'style="color: blue;"' : ''; ?>>Page 5</a>
    </li>
  </ol>
</nav>


