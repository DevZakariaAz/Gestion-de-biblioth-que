<?php
require("../Services/BookService.php");

$bookService = new BookService();
$books = $bookService->getBooks(); // Get all books from the service

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Books</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional CSS for styling -->
</head>
<body>
    <h1>List of Books</h1>

    <div id="results">
        <?php
        if (!empty($books)) {
            foreach ($books as $book) {
                echo "---------------------------------\n";
                echo "<p>ISBN: " . $book->getISBN() . "</p>";
                echo "<p>Title: " . $book->getTitle() . "</p>";
                echo "<p>Publish Date: " . $book->getPublish_date() . "</p>";
                echo "<p>Author: " . $book->getAuthor() . "</p>";
                echo "<hr>";
            }
        } else {
            echo "<p>No books available.</p>";
        }
        ?>
    </div>
    <a href="Reader.php">Back to Search</a> <!-- Link to go back to the search page -->
</body>
</html>
