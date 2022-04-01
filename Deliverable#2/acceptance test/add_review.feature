Feature: add_review
  In order to add review
  As a client
  I need to click "Add review" and input my review for this book

  Scenario: try add_review
  Given I am on "localhost/Client/addReview"
  When I enter my review for a book 
  And click Add
  Then I see "my review"


