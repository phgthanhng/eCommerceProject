<?php
class Home extends Controller
{
    /*
     * Default constructor for the Home
     */ 
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