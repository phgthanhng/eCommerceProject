<?php
class Contact extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Contact/contactUs');

    }
}