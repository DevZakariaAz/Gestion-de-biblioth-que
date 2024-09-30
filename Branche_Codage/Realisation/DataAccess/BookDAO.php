<?php
require_once("../DB/Database.php");

class BookDAO
{
  public function getBooks()
  {
    $dataBase = new DataBase();
    return $dataBase->Books;
  }
  public function viewAvailableBooksWeb()
  {
    $dataBase = new DataBase();
    $books = $dataBase->Books;
    $borrowings = $dataBase->Borrowings;

    $availableBooks = [];

    foreach ($books as $book) {
      $isBorrowed = false;
      foreach ($borrowings as $borrowing) {
        if ($book->getId() == $borrowing->getBook()) {
          if (empty($borrowing->getActual_return_date())) {
            $isBorrowed = true;
            break;
          }
        }
      }

      if (!$isBorrowed) {
        $availableBooks[] = $book;
      }

      return $availableBooks;
    }
  }

  public function getBookByISBN($ISBN)
  {
      $dataBase = new Database(); 
      $books = $dataBase->Books;

      foreach ($books as $book) {
        if ($book->getISBN() == $ISBN) {
          return $book;
        }
      }

      return null;
  }

  public function updateBook($book)
  {
    $dataBase = new Database();
    $books = $dataBase->Books;
      foreach ($books as $index => $existingBook) {
        if ($existingBook->getISBN() == $book->getISBN()) {
          $books[$index] = $book; // Update the book in the array
          break;
        }
      }

    $dataBase->Books = $books; // Save the updated list back to the database
    $dataBase->saveData(); // Save the changes
  }

  public function setBook($book)
  {
    $dataBase = new DataBase();
    $dataBase->Books[] = $book;
    $dataBase->saveData();
  }

  public function deleteBook($id)
  {
    $dataBase = new DataBase();
    $books = $dataBase->Books;
    $bookFound = false;

    foreach ($books as $index => $book) {
      if ($book->getId() == $id) {
        unset($books[$index]);
        $bookFound = true;
        echo "\nBook deleted successfully\n\n";
        break;
      }
    }

    if (!$bookFound) {
      echo "\nNo book found with ID: $id\n\n";
    } else {
      $dataBase->Books = array_values($books);
      $dataBase->saveData();
    }
  }
}