<?php
require("../DataAccess/ReaderDAO.php");

class ReaderService
{
  public function getReaders()
  {
    $dataBase = new ReaderDAO();
    return $dataBase->getReaders();
  }

  public function setReader($reader)
  {
    $readerDAO = new ReaderDAO();
    $readerDAO->setReader($reader);
  }
}