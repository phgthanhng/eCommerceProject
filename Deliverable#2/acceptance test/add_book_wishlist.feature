Feature: add_book_wishlist
  In order to add a book to my wishlist
  As a user
  I need to go to a book and hit a like button on the selected book

  Scenario: try going to Product page
      Given I am on "localhost/Bookstore/Homepage"
      When I click "Product" in the navigation bar
      Then I am on "localhost/Bookstore/Homepage/Product"

  Scenario: try going to a book
    Given I am on"localhost/Bookstore/Homepage/Product"
    When I click on a book in the Product page
    Then I can see the details of the book

  Scenario: try adding a book to my wishlist
    Given I am on "localhost/Bookstore/Homepage/Product/BookName"
    When I hit a like button that is under the picture of the book
    Then  a popup notification will appear to notify that I have sucessfully added the book to my wishlist
