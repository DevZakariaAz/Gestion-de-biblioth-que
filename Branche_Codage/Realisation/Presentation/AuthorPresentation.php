<?php
require("../Services/AuthorService.php");
require("../Model/Author.php");

class AuthorPresentation
{
  public function viewAuthors()
  {
    echo "\nViewing the list of Authors\n";

    $authorService = new AuthorService();
    $authors = $authorService->getAuthors();

    if (!empty($authors)) {
      foreach ($authors as $author) {
        echo "---------------------------------\n";
        echo "last Name : " . $author->getlastName() . "\n";
        echo "first Name: " . $author->getfirstName() . "\n";
        echo "Nationality: " . $author->getnationality() . "\n";
      }
    } else {
      echo "No authors available.\n";
    }
    echo "---------------------------------\n\n";
  }

  public function addAuthor()
  {
    echo "\nAdding a new Author\n";
    $lastName = askQuestion("Enter the last Name of the Author (or type 'back' to go back): ");
    if (strtolower($lastName) === "back") {
      return;
    }

    $firstName = askQuestion("Enter the first Name of the Author (or type 'back' to go back): ");
    if (strtolower($firstName) === "back") {
      return;
    }

    $nationality = askQuestion("Enter nationality of the Author (or type 'back' to go back): ");
    if (strtolower($nationality) === "back") {
      return;
    }

    $new_author = new Author($lastName, $firstName, $nationality);
    $authorService = new AuthorService;
    $authorService->setAuthor($new_author);
    echo "Author added successfully\n\n";
  }
  public function deleteAuthor()
  {
    echo "\nDeleting a Author\n";
    $id = askQuestion("Enter the ID of the author (or type 'back' to go back): ");
    if (strtolower($id) === "back") {
      return;
    }

    $authorService = new AuthorService;
    $authorService->deleteAuthor($id);
  }
}