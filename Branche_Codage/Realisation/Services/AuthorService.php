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
}