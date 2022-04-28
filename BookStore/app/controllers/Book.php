<?php
class Book extends Controller
{
    public function __construct()
    {
        $this->bookModel = $this->model('bookModel');
    }

    /*
     *  Takes all the books and dislay it
     */
    public function index()
    {
        $books = $this->bookModel->getAllBooks();
        $data = [
            'books' => $books,
        ];
        $this->view('Book/viewBooks', $data);
    }

    /*
     * Display a specific book
     */
    public function bookdetail($bookID)
    {
        // For the publication part
        $book = $this->bookModel->getSingleBook($bookID);

        $data = [
            'book' => $book,
        ];

        // show book reviews

        $this->view('Book/bookdetail', $data);
    }

    /*
     * Searches a book/s depending on the input keywords
     */
    public function searchBook()
    {
        if (isset($_POST['submit'])) {
            // get the keyword
            $keywords = trim($_POST['keywords']);

            $books = $this->bookModel->getBooksByAuthorOrTitle($keywords);

            $data = [
                'books' => $books,
            ];
            $this->view('Book/viewBooks', $data);
        }
    }
}
