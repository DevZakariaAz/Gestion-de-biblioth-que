<?php
require_once("../DB/Database.php");

class BookDAO
{
  public function getBooks()
  {
    $dataBase = new DataBase();
    return $dataBase->Books;
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