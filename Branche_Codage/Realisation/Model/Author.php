<?php

class Author
{
  private $id;
  private $lastName;
  private $firstName;
  private $nationality;

  public function __construct($lastName, $firstName, $nationality)
  {
    $this->id = time();  // Generate a unique ID based on the timestamp
    $this->lastName = $lastName;
    $this->firstName = $firstName;
    $this->nationality = $nationality;
  }

  // Getter for ID
  public function getId()
  {
    return $this->id;
  }

  // Setter for ID
  public function setId($id)
  {
    $this->id = $id;
  }

  // Getter for Last Name
  public function getLastName()
  {
    return $this->lastName;
  }

  // Setter for Last Name
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }

  // Getter for First Name
  public function getFirstName()
  {
    return $this->firstName;
  }

  // Setter for First Name
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }

  // Getter for Nationality
  public function getNationality()
  {
    return $this->nationality;
  }

  // Setter for Nationality
  public function setNationality($nationality)
  {
    $this->nationality = $nationality;
  }
}
