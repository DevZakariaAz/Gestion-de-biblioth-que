<?php

 class Database
{
  public $Books = [];
  private $file_path = "../DB/DataBase.txt";

  public function __construct()
  {
    $this->retrieveData();
  }

  private function retrieveData()
  {
    if (file_exists($this->file_path)) {
      $content = file_get_contents($this->file_path);
      $Data = unserialize($content);
      $this->Books = $Data->Books;
    }
  }

  private function storeData()
  {
    $Data = serialize($this);
    file_put_contents($this->file_path, $Data);
  }

  public function saveData()
  {
    $this->storeData();
  }
}
