<?php
class Contact extends Controller
{
    /*
     * Default constructor for the Contact
     */ 
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