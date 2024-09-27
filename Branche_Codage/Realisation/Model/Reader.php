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
    $this->id = time(); 
    $this->cardNumber = $cardNumber;
    $this->lastName = $lastName;
    $this->firstName = $firstName;
    $this->address = $address;
  }
  //* Getters and Setters for cardNumber, lastName, firstName, And address
  public function getId(){ return $this->id; }

  public function getCardNumber() { return $this->cardNumber; }
  public function setCardNumber($cardNumber) { $this->cardNumber = $cardNumber; }

  public function getLastName() { return $this->lastName; }
  public function setLastName($lastName) { $this->lastName = $lastName; }

  public function getFirstName() { return $this->firstName; }
  public function setFirstName($firstName) { $this->firstName = $firstName; }

  public function getAddress() { return $this->address; }
  public function setAddress($address) { $this->address = $address; }
}
