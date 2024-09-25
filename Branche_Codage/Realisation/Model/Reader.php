<?php

class Reader
{
  private $id;
  private $cardNumber;
  private $lastName;
  private $firstName;
  private $address;

  public function __construct($cardNumber, $lastName, $firstName, $address)
  {
    $this->id = time();  // Generate a unique ID based on the timestamp
    $this->cardNumber = $cardNumber;
    $this->lastName = $lastName;
    $this->firstName = $firstName;
    $this->address = $address;
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

  // Getter for Card Number
  public function getCardNumber()
  {
    return $this->cardNumber;
  }

  // Setter for Card Number
  public function setCardNumber($cardNumber)
  {
    $this->cardNumber = $cardNumber;
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

  // Getter for Address
  public function getAddress()
  {
    return $this->address;
  }

  // Setter for Address
  public function setAddress($address)
  {
    $this->address = $address;
  }
}
