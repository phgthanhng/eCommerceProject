<?php
class Book extends Controller
{
    /*
     * Default constructor 
     */
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
        
        $data = [
            'book' => $book,
            "reviews" => $reviews
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

    /*
     * Edit review (update review)
     */
    public function editReview($reviewID)
    {
        $existing_review = $this->reviewModel->getSigleReview($reviewID);

        if (!isset($_POST['editReview'])) {
            $this->view('Order/editReview', $existing_review);
        } else {
            $data = [
                "reviewcontent" => trim($_POST['reviewText']),
                "reviewID" => $reviewID,
                "reviewmark" => trim($_POST['review_mark'])

            ];
            if ($this->reviewModel->editReview($data)) {
                echo "Please wait we are editing your review";
                echo '<meta http-equiv="Refresh" content="2; url=/eCommerceProject/BookStore/Book/bookdetail/'.$existing_review->bookID.'">';
            }
        }
    }

    /*
     * Delete a review based on review id
     */
    public function deleteReview($reviewID) {
        $existing_review = $this->reviewModel->getSigleReview($reviewID);
        if ($this->reviewModel->deleteReview($reviewID)) {

            echo "Please wait we are removing your review";
            echo '<meta http-equiv="Refresh" content="2; url=/eCommerceProject/BookStore/Book/bookdetail/'.$existing_review->bookID.'">';
        }
    }
}
