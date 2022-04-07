<?php
class Book extends Controller
{
    public function __construct()
    {
        $this->bookModel = $this->model('bookModel');
    }

    public function index()
    {
        $books = $this->bookModel->getAllBooks();
        $data = [  
            "books" => $books
        ];
        $this->view('Book/viewBooks', $data);
    }

    public function bookdetail($bookID)
    {
        // For the publication part
        $book = $this->bookModel->getSingleBook($bookID);
    
        $this->view('Book/bookdetail',  $book);
    }
}