<?php

class Review extends Controller
{

    public function __construct()
    {
        $this->reviewModel = $this->model('reviewModel');
        $this->bookModel = $this->model('bookModel');
    }

    public function index()
    {
        
    }


  
}
