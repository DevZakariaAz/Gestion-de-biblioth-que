<?php
require("../Services/ReaderService.php");
require("../Model/Reader.php");

class ReaderPresentation
{
  public function viewReaders()
  {
    echo "\nViewing the list of Readers\n";

    $readerService = new ReaderService();
    $readers = $readerService->getReaders();

    if (!empty($readers)) {
      foreach ($readers as $reader) {
        echo "---------------------------------\n";
        echo "card Number: " . $reader->getCardNumber() . "\n";
        echo "Last Name: " . $reader->getLastName() . "\n";
        echo "First Name: " . $reader->getFirstName() . "\n";
        echo "address: " . $reader->getAddress() . "\n";
      }
    } else {
      echo "No readers available.\n";
    }
    echo "---------------------------------\n\n";
  }

  public function addReader()
  {
    echo "\nAdding a new Reader\n";
    $cardNumber = askQuestion("Enter the card Number of the Reader (or type 'back' to go back): ");
    if (strtolower($cardNumber) === "back") {
      return;
    }

    $lastName = askQuestion("Enter the last Name of the Reader (or type 'back' to go back): ");
    if (strtolower($lastName) === "back") {
      return;
    }

    $firstName = askQuestion("Enter the first Name of the Reader (or type 'back' to go back): ");
    if (strtolower($firstName) === "back") {
      return;
    }

    $address = askQuestion("Enter address of the Reader (or type 'back' to go back): ");
    if (strtolower($address) === "back") {
      return;
    }

    $new_reader = new Reader($cardNumber, $lastName, $address, $firstName);
    $readerService = new ReaderService;
    $readerService->setReader($new_reader);
    echo "Reader added successfully\n\n";
  }
  
  public function deleteReader()
  {
    echo "\nDeleting a Reader\n";
    $id = askQuestion("Enter the ID of the reader (or type 'back' to go back): ");
    if (strtolower($id) === "back") {
      return;
    }

    $readerService = new ReaderService;
    $readerService->deleteReader($id);
  }
}