Feature: update_review
  In order to update my review for a book
  As a client
  I need to click "update review" and input new review for this book

  Scenario: try update_review
  Given I am on "localhost/Client/updateReview"
  When I enter my new review for a book 
  And click update
  Then I see "Update review successfully"
