<?php
class Categories extends Controller
{
    public function __construct()
    {
        $this->bookModel = $this->model('bookModel');
    }

    public function classic()
    {
        $category = 'classic';
        $classic_books = $this->bookModel->getAllBooksByCategory($category);
        $data = [  
            "classic_books" => $classic_books
        ];
        $this->view('Categories/classic', $data);
    }

    public function romance()
    {
        $category = 'romance';
        $romance_books = $this->bookModel->getAllBooksByCategory($category);
        $data = [  
            "romance_books" => $romance_books
        ];
        $this->view('Categories/romance', $data);
    }

    public function fiction()
    {
        $category = 'fiction';
        $fiction_books = $this->bookModel->getAllBooksByCategory($category);
        $data = [  
            "fiction_books" => $fiction_books
        ];
        $this->view('Categories/fiction', $data);
    }

    public function non_fiction()
    {
        $category = 'non-fiction';
        $non_fiction_books = $this->bookModel->getAllBooksByCategory($category);
        $data = [  
            "non_fiction_books" => $non_fiction_books
        ];
        $this->view('Categories/non_fiction', $data);
    }
        
    public function self_help()
    {
        $category = 'self-help';
        $self_help_books = $this->bookModel->getAllBooksByCategory($category);
        $data = [  
            "self_help_books" => $self_help_books
        ];
        $this->view('Categories/self_help', $data);
    }
}