<?php
require("../Services/BookService.php");
require("../Model/Book.php");

class BookPresentation
{
  public function viewBooks()
  {
    echo "\nViewing the list of Books\n";

    $bookService = new BookService();
    $books = $bookService->getBooks();

    if (!empty($books)) {
      foreach ($books as $book) {
        echo "---------------------------------\n";
        echo "Id : ". $book->getid()."\n";
        echo "ISBN: " . $book->getISBN() . "\n";
        echo "Title: " . $book->getTitle() . "\n";
        echo "Publish Date: " . $book->getPublish_date() . "\n";
        echo "Author: " . $book->getAuthor() . "\n";
      }
    } else {
      echo "No books available.\n";
    }
    echo "---------------------------------\n\n";
  }

  public function addBook()
  {
    echo "\nAdding a new Book\n";
    $ISBN = askQuestion("Enter the ISBN of the book (or type 'back' to go back): ");
    if (strtolower($ISBN) === "back") {
      return;
    }

    $title = askQuestion("Enter the title of the book (or type 'back' to go back): ");
    if (strtolower($title) === "back") {
      return;
    }

    $Author = askQuestion("Enter the Author of the book (or type 'back' to go back): ");
    if (strtolower($Author) === "back") {
      return;
    }

    $publish_date = askQuestion("Enter Publish Date of the book (or type 'back' to go back): ");
    if (strtolower($publish_date) === "back") {
      return;
    }

    $new_book = new Book($ISBN, $title, $publish_date, $Author);
    $bookService = new BookService;
    $bookService->setBook($new_book);
    echo "Book added successfully\n\n";
  }

  public function deleteBook()
  {
    echo "\nDeleting a Book\n";
    $id = askQuestion("Enter the ID of the book (or type 'back' to go back): ");
    if (strtolower($id) === "back") {
      return;
    }

    $bookService = new BookService;
    $bookService->deleteBook($id);
  }

  public function editBook()
  {
    echo "\nEditing a Book\n";
    $ISBN = askQuestion("Enter the ISBN of the book to edit (or type 'back' to go back): ");
    if (strtolower($ISBN) === "back") {
        return;
    }

    $bookService = new BookService();
    $book = $bookService->getBookByISBN($ISBN);

    if (!$book) {
        echo "No book found with ISBN: $ISBN\n\n";
        return;
    }

    // Display current book details
    echo "Current details of the book:\n";
    echo "---------------------------------\n";
    echo "Id: " . $book->getId() . "\n";
    echo "ISBN: " . $book->getISBN() . "\n";
    echo "Title: " . $book->getTitle() . "\n";
    echo "Publish Date: " . $book->getPublish_date() . "\n";
    echo "Author: " . $book->getAuthor() . "\n";
    echo "---------------------------------\n";

    // Prompt the user for new details
    $newTitle = askQuestion("Enter the new title of the book (or press Enter to keep current title): ");
    if (!empty($newTitle)) {
        $book->setTitle($newTitle);
    }

    $newAuthor = askQuestion("Enter the new Author of the book (or press Enter to keep current Author): ");
    if (!empty($newAuthor)) {
        $book->setAuthor($newAuthor);
    }

    $newPublishDate = askQuestion("Enter the new Publish Date of the book (or press Enter to keep current Publish Date): ");
    if (!empty($newPublishDate)) {
        $book->setPublish_date($newPublishDate);
    }

    // Update the book in the service
    $bookService->updateBook($book);
    echo "Book updated successfully\n\n";
  }
  public function searchBook()
  {
    echo "\nSearching for a Book\n";
    $searchQuery = askQuestion("Enter the title or ISBN of the book to search (or type 'back' to go back): ");
    if (strtolower($searchQuery) === "back") {
        return;
    }

    $bookService = new BookService();
    $books = $bookService->getBooks(); // Get all books

    $foundBooks = []; // To store matching books
    foreach ($books as $book) {
        if (stripos($book->getTitle(), $searchQuery) !== false || $book->getISBN() === $searchQuery) {
            $foundBooks[] = $book; // Add matching book to results
        }
    }

    if (!empty($foundBooks)) {
        echo "---------------------------------\n";
        foreach ($foundBooks as $book) {
            echo "Id: " . $book->getId() . "\n";
            echo "ISBN: " . $book->getISBN() . "\n";
            echo "Title: " . $book->getTitle() . "\n";
            echo "Publish Date: " . $book->getPublish_date() . "\n";
            echo "Author: " . $book->getAuthor() . "\n";
            echo "---------------------------------\n";
        }
    } else {
        echo "No books found matching your search.\n";
    }

    echo "---------------------------------\n\n";
  }

}