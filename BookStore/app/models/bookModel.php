<?php
class bookModel
{
    /*
     * Default constructor for the bookModel class
     */
    public function __construct()
    {
        $this->db = new Model();
    }

    /*
     * Retrieves all book from the database
     */
    public function getAllBooks()
    {
        $this->db->query(
            "SELECT * 
            FROM book"
        );
        return $this->db->getResultSet();
    }

    /*
     *  Retrieves a specific book from the database based on the bookID
     */
    public function getSingleBook($bookID)
    {
        $this->db->query(
            "SELECT * 
            FROM book 
            WHERE bookID = :bookID"
        );

        $this->db->bind(':bookID', $bookID);

        return $this->db->getSingle();
    }

    /*
     * Creates a new book that will be inserted into the database
     */
    public function addBook($data)
    {
        $this->db->query(
            "INSERT INTO book (bookname, isbn, author, publisher, retailprice, availablequantity, image, description, category)
            values  (:bookname, :isbn, :author, :publisher, :retailprice, :availablequantity, :image, :description, :category)"
        );

        $this->db->bind(':bookname', $data['bookname']);
        $this->db->bind(':isbn', $data['isbn']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':publisher', $data['publisher']);
        $this->db->bind(':retailprice', $data['retailprice']);
        $this->db->bind(':availablequantity', $data['availablequantity']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':category', $data['category']);

        return $this->db->execute();
    }

    /*
     * Retrieves all books depending on the category
     */
    public function getAllBooksByCategory($category)
    {
        $this->db->query(
            "SELECT * 
            FROM book
            WHERE category = :category"
        );

        $this->db->bind(':category', $category);

        return $this->db->getResultSet();
    }

    /*
     * Retrieves a book based on the keywords
     */
    public function getBooksByAuthorOrTitle($keyword)
    {
        $this->db->query(
            "SELECT * 
            FROM book
            WHERE lower(author) like '%$keyword%' 
            OR lower(bookname) like '%$keyword%' ;"
        );

        return $this->db->getResultSet();
    }

    /*
     * Updates a specific book
     */
    public function editBook($data)
    {
        $this->db->query(
            "UPDATE book 
            SET bookname=:bookname, isbn=:isbn, author=:author, publisher=:publisher, 
            retailprice=:retailprice, availablequantity=:availablequantity, 
            image =:image,  description=:description, category=:category
            WHERE bookID=:bookID"
        );

        $this->db->bind(':bookname', $data['bookname']);
        $this->db->bind(':isbn', $data['isbn']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':publisher', $data['publisher']);
        $this->db->bind(':retailprice', $data['retailprice']);
        $this->db->bind(':availablequantity', $data['availablequantity']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':bookID', $data['bookID']);

        return $this->db->execute();
    }

    /*
     * Deletes a specific book
     */
    public function delete($data)
    {
        $this->db->query(
            "DELETE 
            FROM book 
            WHERE bookID=:bookID"
        );

        $this->db->bind('bookID', $data['bookID']);

        return $this->db->execute();
    }

    /*
     * Updates the book quantity in the database
     */
    public function updateBookQuantity($data)
    {
        $this->db->query(
            "UPDATE book 
            SET availablequantity=:availablequantity
            WHERE bookID=:bookID"
        );

        $this->db->bind(':availablequantity', $data['updatedQuantity']);
        $this->db->bind(':bookID', $data['bookID']);
        return $this->db->execute();
    }
}
