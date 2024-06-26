<?php

include_once './model/Book.php';

class BookController{
    private $book;

    public function __construct()
    {
        $this->book=new Book();
    }

    public function getBooks()
    {
        return $this->book->getBooks();
    }

    public function getBooksByCategory($category_id)
    {
        return $this->book->getBooksByCategory($category_id);
    }

    public function getBooksByAuthor($author_id)
    {
        return $this->book->getBooksByAuthor($author_id);
    }
}

?>