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
        echo "Wishlist added message test";
        //header('Location: /eCommerceProject/BookStore/Book/bookdetail/'. $bookID);  // redirects to the same page

    }
}