Feature: delete_book_wishlist
  In order to delete a book from my wishlist
  As a user
  I need to go to my wishlist and click on "Delete" button under a book to delete it from my wishlist

  Scenario: try going to my wishlist
    Given I am on user's Home page
    When I click on "Wishlist" in the navigation bar
    Then I am on user's Wishlist page

  Scenario: try delete a book from my wishlist
    Given I am on user's Wishlist page
    When  I click on "Delete" button under a book
    Then the book is deleted from my wishlist

