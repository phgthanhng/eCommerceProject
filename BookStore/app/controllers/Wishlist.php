<?php

class Wishlist extends Controller
{
    public function __construct()
    {
       
    }

    public function index()
    {
        $this->view('Wishlist/index');
    }

    public function addBook($bookID) {
        echo "Book added to wishlist";
        header('Location: /eCommerceProject/BookStore/Book/bookdetail/'. $bookID);
    }
}