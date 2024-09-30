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
      $authors = $dataBase->Authors;
      $authorFound = false;
  
      if (!is_array($authors)) {
          echo "\nAuthors data is not available\n";
          return;
      }
  
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
          $dataBase->Authors = array_values($authors); 
          $dataBase->saveData(); 
      }
  }
  public function editAuthor($author)
  {
    $dataBase = new Database();
    $authors = $dataBase->Authors;
    $authorFound = false;

    foreach ($authors as $index => $existingAuthor) {
      if ($existingAuthor->getId() == $author->getId()) {
        $authors[$index] = $author; // Replace with the edited author
        $authorFound = true;
        break;
        }
      }

      if ($authorFound) {
        $dataBase->Authors = array_values($authors); // Reindex the array
        $dataBase->saveData(); // Save changes to the data source
          echo "Author updated successfully.\n";
      } else {
          echo "No author found with ID: " . $author->getId() . "\n";
      }
  }

}