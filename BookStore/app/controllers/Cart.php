<?php
class Cart extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Cart/cart');
    }
}