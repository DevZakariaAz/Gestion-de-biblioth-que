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
}