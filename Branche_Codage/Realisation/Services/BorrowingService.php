<?php
require("../DataAccess/BookDAO.php");

class BorrowingService
{
  public function getBooks()
  {
    $dataBase = new BookDAO();
    return $dataBase->getBooks();
  }

  public function setBook($book)
  {
    $bookDAO = new BookDAO();
    $bookDAO->setBook($book);
  }
}