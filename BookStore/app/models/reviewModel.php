<?php
class reviewModel
{
    public function __construct()
    {
        $this->db = new Model;
    }


    /*
    *   create a review
    */
    public function createReview($data)
    {
        $userID = $_SESSION['user_id'];

        $this->db->query(
            "INSERT INTO review (bookID , userID, reviewdate, reviewcontent, reviewmark) 
                values (:bookID, $userID, now(), :reviewcontent, :reviewmark)"
        );
        $this->db->bind(':bookID', $data['bookID']);
        $this->db->bind(':reviewcontent', $data['reviewcontent']);
        $this->db->bind(':reviewmark', $data['reviewmark']);

        return $this->db->execute(); 

    }



    
    /*
     * Retrieves all the reviews based on the book id 
     */
    public function getBookReviews($bookID)
    {
        $this->db->query(
            "SELECT review.reviewID, review.bookID, review.userID, review.reviewdate, review.reviewcontent, review.reviewmark,
            user.userID, user.firstname, user.lastname
            FROM review INNER JOIN user on 
            review.userID = user.userID
            WHERE bookID = :bookID"
        );
        $this->db->bind(':bookID', $bookID);
        return $this->db->getResultSet();
    }

     /*
     * Retrieves a single review of the user based on the review id
     */
    public function getSigleReview($reviewID)
    {
        $this->db->query("SELECT * FROM review 
        WHERE reviewID = :reviewID");
        $this->db->bind(':reviewID', $reviewID);
        return $this->db->getSingle();
    }


     /*
     * Retrieves all the reviews of the user
     */
    public function getUserReviews() {
        $userID = $_SESSION['user_id'] ;
        $this->db->query(
                "SELECT review.reviewID, review.bookID, review.userID, review.reviewdate, review.reviewcontent, review.reviewmark,
                book.bookID,book.bookname, user.userID
                FROM review 
                INNER JOIN user ON review.userID = user.userID
                JOIN book ON book.bookID = review.bookID
                WHERE user.userID = '$userID' "
        );
        return $this->db->getResultSet();
    }

     /*
     * Deletes a book review based on the review id
     */
    public function deleteReview($reviewID)
    {
        $this->db->query("DELETE FROM review WHERE reviewID = :reviewID");
        $this->db->bind(':reviewID', $reviewID);
        return $this->db->execute();
    }

     /*
     * Updates a review 
     */
    public function editReview($data)
    {
        $this->db->query(
            "UPDATE review 
            SET reviewcontent = :reviewcontent,
            reviewmark = :reviewmark
            WHERE reviewID = :reviewID"
        );
        $this->db->bind(':reviewcontent', $data['reviewcontent']);
        $this->db->bind(':reviewmark', $data['reviewmark']);
        $this->db->bind(':reviewID', $data['reviewID']);
        return $this->db->execute();
    }

    


   
}
