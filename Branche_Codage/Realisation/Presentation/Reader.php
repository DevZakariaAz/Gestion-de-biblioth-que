<?php
require("./BookPresentation.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library</title>
</head>

<body>
  <h1>View the Available Books</h1>
  <form method="post">
    <button type="submit" name="viewBooks">View Books</button>
  </form>

  <?php
  if (isset($_POST["viewBooks"])) {
    $bookPresentation = new BookPresentation();
    $bookPresentation->viewAvailableBooksWeb();
  }
  ?>
</body>

</html>
