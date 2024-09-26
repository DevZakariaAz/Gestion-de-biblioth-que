<?php

class Author
{
  private $id;
  private $lastName;
  private $firstName;
  private $nationality;

  public function __construct($lastName, $firstName, $nationality)
  {
    $this->id = time();  
    $this->lastName = $lastName;
    $this->firstName = $firstName;
    $this->nationality = $nationality;
  }
    //* Getters and Setters for ID, lastName, nationality, And firstNamen

  public function getId() { return $this->id; }

  public function getlastName() { return $this->lastName; }
  public function setlastName($lastName) { $this->lastName = $lastName; }

  public function getfirstName() { return $this->firstName; }
  public function setfirstName($firstName) { $this->firstName = $firstName; }

  public function getnationality() { return $this->nationality; }
  public function setnationality($nationality) { $this->nationality = $nationality; }
}
