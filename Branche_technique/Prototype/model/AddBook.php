<?php
require_once 'Book.php'; // Include the Book class
require_once 'BookRepository.php'; // Include the BookRepository class

class BookManager {
    private $bookRepository;

    public function __construct($dataFile) {
        $this->bookRepository = new BookRepository($dataFile);
    }

    public function addBook($title, $author) {
        // Validate input
        if (empty($title) || empty($author)) {
            echo "Title and author cannot be empty.\n";
            return false;
        }

        // Create a new book
        $id = $this->generateId(); // Generate a unique ID for the book
        $book = new Book($id, $title, $author);

        // Save the book to the repository
        $success = $this->bookRepository->saveBook($book);
        if ($success) {
            echo "Book '{$title}' added successfully.\n";
        } else {
            echo "Failed to add the book.\n";
        }
    }

    private function generateId() {
        // Generate a unique ID (simple implementation)
        return time(); 
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
}
?>
