<?php
require_once '../model/BookRepository.php';

// Path to the JSON data file
$dataFile = '../data/books.json';
$bookRepository = new BookRepository($dataFile);

// Get all books
$books = $bookRepository->getAllBooks();

// Display the list of books in the console
echo "==============================\n";
echo "          List of Books       \n";
echo "==============================\n";
foreach ($books as $book) {
    echo $book->title . " by " . $book->author . "\n";
}
echo "==============================\n";
// Debug output
// var_dump($books);
