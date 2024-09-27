<?php
require_once("../DB/Database.php");

class ReaderDAO
{
  public function getReaders()
  {
    $dataBase = new DataBase();
    return $dataBase->Readers;
  }

  public function setReader($reader)
  {
    $dataBase = new DataBase();
    $dataBase->Readers[] = $reader;
    $dataBase->saveData();
  }
  
  public function deleteReader($id)
  {
    $dataBase = new DataBase();
    $readers = $dataBase->Readers;
    $bookFound = false;

    foreach ($readers as $index => $reader) {
      if ($reader->getId() == $id) {
        unset($readers[$index]);
        $readerFound = true;
        echo "\nReader deleted successfully\n\n";
        break;
      }
    }

    if (!$readerFound) {
      echo "\nNo Reader found with ID: $id\n\n";
    } else {
      $dataBase->Readers = array_values($readers);
      $dataBase->saveData();
    }
  }
}
