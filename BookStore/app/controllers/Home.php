<?php
class Home extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Home/index');

    }

    public function popularBooks() {
        $this->view('Home/popularBooks');
    }
}