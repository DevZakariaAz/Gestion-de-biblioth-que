<?php
require("../DB/DataBase.php");

class AuthorDAO
{
  public function getAuthors()
  {
    $dataBase = new DataBase();
    return $dataBase->Authors;
  }

  public function setAuthor($author)
  {
    $dataBase = new DataBase();
    $dataBase->Authors[] = $author;
    $dataBase->saveData();
  }
}
