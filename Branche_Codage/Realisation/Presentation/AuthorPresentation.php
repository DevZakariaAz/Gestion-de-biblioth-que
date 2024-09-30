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
        echo "Id : ". $author->getid()."\n";
        echo "last Name : " . $author->getlastName() . "\n";
        echo "first Name: " . $author->getfirstName() . "\n";
        echo "Nationality: " . $author->getnationality() . "\n";
      }
    } else {
      echo "No authors available.\n";
    }
    echo "---------------------------------\n\n";
  }

  public function editAuthor()
  {
    echo "\nEditing an Author\n";
    $authorId = askQuestion("Enter the ID of the author to edit (or type 'back' to go back): ");
    if (strtolower($authorId) === "back") {
        return;
    }

    $authorService = new AuthorService();
    $authors = $authorService->getAuthors();

    $foundAuthor = null; 
    foreach ($authors as $author) {
        if ($author->getId() == $authorId) {
            $foundAuthor = $author;
            break;
        }
    }

    if (!$foundAuthor) {
        echo "No author found with ID: $authorId\n\n";
        return;
    }

    echo "Current details of the author:\n";
    echo "---------------------------------\n";
    echo "Id: " . $foundAuthor->getId() . "\n";
    echo "Last Name: " . $foundAuthor->getlastName() . "\n";
    echo "First Name: " . $foundAuthor->getfirstName() . "\n";
    echo "Nationality: " . $foundAuthor->getnationality() . "\n";
    echo "---------------------------------\n";

    // Prompt the user for new details
    $newLastName = askQuestion("Enter the new last name of the author (or press Enter to keep current last name): ");
    if (!empty($newLastName)) {
        $foundAuthor->setlastName($newLastName);
    }

    $newFirstName = askQuestion("Enter the new first name of the author (or press Enter to keep current first name): ");
    if (!empty($newFirstName)) {
        $foundAuthor->setfirstName($newFirstName);
    }

    $newNationality = askQuestion("Enter the new nationality of the author (or press Enter to keep current nationality): ");
    if (!empty($newNationality)) {
        $foundAuthor->setnationality($newNationality);
    }

    $authorService->setAuthor($foundAuthor);
    echo "Author updated successfully\n\n";
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