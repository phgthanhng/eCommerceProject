<?php
class Categories extends Controller
{
    public function __construct()
    {
    }

    // Chilka: we dont have index
    // public function index()
    // {
    //     $this->view('Categories/index');
    // }

    public function index()
    {
        $this->view('Categories/classic');
    }

    public function romance()
    {
        $this->view('Categories/romance');
    }

    public function fiction()
    {
        $this->view('Categories/fiction');
    }

    public function non_fiction()
    {
        $this->view('Categories/non_fiction');
    }
        
    public function self_help()
    {
        $this->view('Categories/self_help');
    }
}