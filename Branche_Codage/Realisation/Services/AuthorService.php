<?php
require("../DataAccess/AuthorDAO.php");

class AuthorService
{
  public function getAuthors()
  {
    $dataBase = new AuthorDAO();
    return $dataBase->getAuthors();
  }

  public function setAuthor($author)
  {
    $authorDAO = new AuthorDAO();
    $authorDAO->setAuthor($author);
  }
  public function deleteAuthor($id)
  {
    $authorDAO = new AuthorDAO();
    $authorDAO->deleteAuthor($id);
  }
  public function editAuthor($author)
    {
        $authorDAO = new AuthorDAO();
        $authorDAO->editAuthor($author);
    }

}