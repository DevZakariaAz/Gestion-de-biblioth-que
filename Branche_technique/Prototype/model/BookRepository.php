<?php
require_once '../model/Book.php';

class BookRepository {
    private $dataFile;

    public function __construct($dataFile) {
        $this->dataFile = $dataFile;
    }

    public function getAllBooks() {
        if (!file_exists($this->dataFile)) {
            echo "Data file not found: " . $this->dataFile . "\n";
            return []; // Return an empty array if the file doesn't exist
        }

        $jsonData = file_get_contents($this->dataFile); // Read the JSON file
        $bookData = json_decode($jsonData); //Deserialize from JSON

        // Create an array of Book objects
        $books = [];
        foreach ($bookData as $data) {
            $books[] = new Book($data->id, $data->title, $data->author);
        }

        return $books; // Return the array of Book objects
    }
    public function saveBook($book) {
        // Load existing books
        $books = $this->getAllBooks();
        $books[] = $book; // Add the new book
    
        // Save back to JSON file
        $jsonData = json_encode($books); //Serialize to JSON
        return file_put_contents($this->dataFile, $jsonData); // write the JSON file
    }
}

?>
