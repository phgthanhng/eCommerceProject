Feature: read_books_review
  In order to read the books reviews
  As an admin
  I need to click a book in all book page and get the matching results

  Scenario: try read_books_review
  Given I am on "localhost/adminAllBooks/review"
  When I click a Book in the all Book page
  Then I see "All review of this book"
