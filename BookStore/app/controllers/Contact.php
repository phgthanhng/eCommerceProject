<?php
class Contact extends Controller
{
    public function __construct()
    {
    }

    /*
     * Displays the contact us 
     */
    public function index()
    {
        $this->view('Contact/contactUs');

    }
}