<?php
require("../DB/DataBase.php");

class BorrowingDAO
{
  public function getBorrowings()
  {
    $dataBase = new DataBase();
    return $dataBase->Borrowings;
  }

  public function setBorrowing($borrowing)
  {
    $dataBase = new DataBase();
    $dataBase->Borrowings[] = $borrowing;
    $dataBase->saveData();
  }
}