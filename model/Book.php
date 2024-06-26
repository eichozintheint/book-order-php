<?php

include_once './includes/db.php';

class Book{
    private $con,$statement;

    public function getBooks()
    {
        $this->con=Database::connect();
        $sql='select books.id,books.title,books.description,books.edition,books.price,books.stock,books.pages,books.rating,books.publish_date,books.discount,
            authors.name as author,categories.name as category,status.name as status,publishers.name as publisher
            from books join authors join categories join status join publishers
            on books.author_id=authors.id and books.category_id=categories.id and books.status_id=status.id and books.publisher_id=publishers.id';
        $this->statement=$this->con->prepare($sql);
        if($this->statement->execute())
        {
            $books=$this->statement->fetchAll(PDO::FETCH_ASSOC);
            return $books;
        }
    }

    public function getBooksByCategory($category_id)
    {
        $this->con=Database::connect();
        $sql='select books.id,books.title,books.description,books.edition,books.price,books.stock,books.pages,books.rating,books.publish_date,books.discount,
            authors.name as author,categories.name as category,status.name as status,publishers.name as publisher
            from books join authors join categories join status join publishers
            on books.author_id=authors.id and books.category_id=categories.id and books.status_id=status.id and books.publisher_id=publishers.id and categories.id=:id';
        $this->statement=$this->con->prepare($sql);
        $this->statement->bindParam(':id',$category_id);
        if($this->statement->execute())
        {
            $books=$this->statement->fetchAll(PDO::FETCH_ASSOC);
            return $books;
        }
    }

    public function getBooksByAuthor($author_id)
    {
        $this->con=Database::connect();
        $sql='select books.id,books.title,books.description,books.edition,books.price,books.stock,books.pages,books.rating,books.publish_date,books.discount,
            authors.name as author,categories.name as category,status.name as status,publishers.name as publisher
            from books join authors join categories join status join publishers
            on books.author_id=authors.id and books.category_id=categories.id and books.status_id=status.id and books.publisher_id=publishers.id and authors.id=:id';
        $this->statement=$this->con->prepare($sql);
        $this->statement->bindParam(':id',$author_id);
        if($this->statement->execute())
        {
            $books=$this->statement->fetchAll(PDO::FETCH_ASSOC);
            return $books;
        }
    }
}

?>