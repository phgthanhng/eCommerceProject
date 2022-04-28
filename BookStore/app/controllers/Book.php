<?php
class Book extends Controller
{
    public function __construct()
    {
        $this->bookModel = $this->model('bookModel');
        $this->reviewModel = $this->model('reviewModel');
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
        // For the book part
        $book = $this->bookModel->getSingleBook($bookID);


        // show book reviews
        $reviews = $this->reviewModel->getBookReviews($bookID);
        $userInfo = $this->reviewModel->getReviewProfile();
        $data = [
            'book' => $book,
            "reviews" => $reviews,
            "currentUser" => $userInfo
           
        ];

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
