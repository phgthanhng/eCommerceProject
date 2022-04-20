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
}