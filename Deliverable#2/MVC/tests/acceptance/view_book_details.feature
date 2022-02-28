Feature: view_book_details
  In order to view a book's details
  As a user
  I need to go to Product page and click on a book on the Product page

  Scenario: try going to Product page
    Given I am on "localhost/Bookstore/Homepage"
    When I click "Product" in the navigation bar
    Then I am on admin's Product page
    
  Scenario: try viewing a book's details
    Given I am on "localhost/Bookstore/Homepage/Product"
    When I click on a book in the Product page
    Then I can see the details of the book
