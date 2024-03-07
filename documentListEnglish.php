<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Select Document</title>
  <!-- Add Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Select Document</h2>
  
  <!-- Button 1 -->
  <button type="button" class="btn btn-primary mr-2" onclick="redirectToPage('/englishDocuments/doc1/doc1.php')">Doc 1</button>
  
  <!-- Button 2 -->
  <button type="button" class="btn btn-secondary mr-2" onclick="redirectToPage('/englishDocuments/doc2/doc2.php')">Doc 2</button>
  
  <!-- Button 3 -->
  <button type="button" class="btn btn-success mr-2" onclick="redirectToPage('/englishDocuments/doc3/doc3.php')">Doc 3</button>
  
  <!-- Button 4 -->
  <button type="button" class="btn btn-danger" onclick="redirectToPage('/englishDocuments/doc4/doc4.php')">Doc 4</button>
</div>

<!-- Add Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // JavaScript function to redirect to the specified page
  function redirectToPage(url) {
    window.location.href = url;
  }
</script>

</body>
</html>
