<?php
require("../DataAccess/BookDAO.php");
class BookService
{
    public function getBooks()
    {
        $bookDAO = new BookDAO();
        return $bookDAO->getBooks();
    }

    public function setBook($book)
    {
        $bookDAO = new BookDAO();
        $bookDAO->setBook($book);
    }

    public function deleteBook($id)
    {
        $bookDAO = new BookDAO();
        $bookDAO->deleteBook($id);
    }

    // Fetch a book by its ISBN
    public function getBookByISBN($ISBN)
    {
        $bookDAO = new BookDAO();
        return $bookDAO->getBookByISBN($ISBN);
    }

    // Update a book's details
    public function updateBook($book)
    {
        $bookDAO = new BookDAO();
        $bookDAO->updateBook($book);
    }
}
