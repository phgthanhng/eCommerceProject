<?php
class bookModel
{
    public function __construct()
    {
        $this->db = new Model;
    }

    // get all the books
    public function getBooks()
    {
        $this->db->query("SELECT * FROM book");
        return $this->db->getResultSet();
    }

    
    // Get a single book 
    public function getSingleBook($bookID)
    {
        $this->db->query("SELECT * FROM book WHERE bookID = :bookID");
        $this->db->bind(':bookID', $bookID);
        return $this->db->getSingle();
    }



    // create a book
    public function createBook($data){
        $this->db->query("INSERT INTO book (bookname, isbn, author, publisher, publisheddate, retailprice, availablequantity, soldquantity, image, description, category)
         values  (:bookname, :isbn, :author, :publisher, :publisheddate, :retailprice, :availablequantity, :soldquantity, :image, :description, :category)");
        $this->db->bind(':bookname', $data['bookname']);
        $this->db->bind(':isbn', $data['isbn']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':publisher', $data['publisher']);
        $this->db->bind(':publisheddate', $data['publisheddate']);
        $this->db->bind(':retailprice', $data['retailprice']);
        $this->db->bind(':availablequantity', $data['availablequantity']);
        $this->db->bind(':soldquantity', $data['soldquantity']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':category', $data['category']);


        return ($this->db->execute());
    }


    // get books by category
    public function getAllBooksByCategory($category)
    {   
        $this->db->query(
            "SELECT * 
            FROM book
            WHERE category = $category;"
        );
        return $this->db->getResultSet(); 
    }


    // update a book
    public function updateBook($data){
        $this->db->query("UPDATE book SET bookname=:bookname, isbn=:isbn, author=:author, publisher=:publisher, 
        publisheddate=:publisheddate, retailprice=:retailprice, availablequantity=:availablequantity, 
        soldquantity=:soldquantity, image =:image,  description=:description, category=:category
        WHERE bookID=:bookID");
        $this->db->bind(':bookname', $data['bookname']);
        $this->db->bind(':isbn', $data['isbn']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':publisher', $data['publisher']);
        $this->db->bind(':publisheddate', $data['publisheddate']);
        $this->db->bind(':retailprice', $data['retailprice']);
        $this->db->bind(':availablequantity', $data['availablequantity']);
        $this->db->bind(':soldquantity', $data['soldquantity']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':category', $data['category']);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }

    }


    // delete a book
    public function delete($data){
        $this->db->query("DELETE FROM book WHERE bookID=:bookID");
        $this->db->bind('bookID',$data['bookID']);

        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }

    }


}