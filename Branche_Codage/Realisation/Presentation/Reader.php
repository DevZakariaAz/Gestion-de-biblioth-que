<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management</title>
</head>
<body>
    <h1>Book Management</h1>

    <form action="searchReader.php" method="POST">
        <label for="ISBN">Enter Book ISBN:</label>
        <input type="text" id="ISBN" name="ISBN" required>
        <button type="submit">Search</button>
    </form>

    <form action="view_books.php" method="post">
        <button type="submit">View All Books</button>
    </form>

    <div >
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require("../Services/BookService");
            $bookService = new BookService();

            $title = $_POST['ISBN'];
            $book = $bookService->getBookByISBN($ISBN);
            if ($book) {
                echo "<h2>Book Details:</h2>";
                echo "<p>ISBN: " . $book->getISBN() . "</p>";
                echo "<p>Title: " . $book->getTitle() . "</p>";
                echo "<p>Publish Date: " . $book->getPublish_date() . "</p>";
                echo "<p>Author: " . $book->getAuthor() . "</p>";
            } else {
                echo "<p>No book found with the ISBN: " . $ISBN . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
