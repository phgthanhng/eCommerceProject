Feature: delete_book_wishlist
  In order to delete a book from my wishlist
  As a user
  I need to go to my wishlist and click on "Delete" button under a book to delete it from my wishlist

  Scenario: try going to my wishlist
    Given I am on "localhost/Bookstore/Homepage"
    When I click on "Wishlist" in the navigation bar
    Then I am on "localhost/Bookstore/Homepage/Wishlist"

  Scenario: try delete a book from my wishlist
    Given I am on "localhost/Bookstore/Homepage/Wishlist"
    When  I click on "Delete" button under a book
    Then the book is deleted from my wishlist
