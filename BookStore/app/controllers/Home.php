<?php
class Home extends Controller
{
    public function __construct()
    {
    }

    /*
     * Displays home
     */
    public function index()
    {
        $this->view('Home/index');

    }
}