<?php
require_once '../model/AddBook.php';

// Path to the JSON data file
$dataFile = '../data/books.json';
$bookManager = new BookManager($dataFile);

// Example of adding a new book
$title = "test";
$author = "Azizi Zakaria";

$bookManager->addBook($title, $author);

// Optionally, include list_books.php to display the updated list
require_once '../view/list_books.php'; 
?>
