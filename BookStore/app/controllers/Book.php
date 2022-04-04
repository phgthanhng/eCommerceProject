<?php
class Book extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Book/viewBooks');
    }
}