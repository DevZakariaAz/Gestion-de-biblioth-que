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
}
