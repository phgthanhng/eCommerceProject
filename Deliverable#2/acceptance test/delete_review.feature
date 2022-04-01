Feature: delete_review
  In order to delete a review for a book
  As a client
  I need to click "delete review" 

  Scenario: try delete_review
  Given I am on "localhost/Client/deleteReview"
  When I click delete review
  Then I see "Do you want to delete this review?"



