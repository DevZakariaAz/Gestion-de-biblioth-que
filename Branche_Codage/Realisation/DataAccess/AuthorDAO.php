<?php
require_once("../DB/Database.php");

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
  public function deleteAuthor($id)
  {
    $dataBase = new DataBase();
    $authors = $dataBase->authors;
    $bookFound = false;

    foreach ($authors as $index => $author) {
      if ($author->getId() == $id) {
        unset($authors[$index]);
        $authorFound = true;
        echo "\nAuthor deleted successfully\n\n";
        break;
      }
    }

    if (!$authorFound) {
      echo "\nNo Author found with ID: $id\n\n";
    } else {
      $dataBase->Ruthors = array_values($authors);
      $dataBase->saveData();
    }
  }
}
