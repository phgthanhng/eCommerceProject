Feature: track_book
  In order to track book for sale
  As an admin
  I need to go to Product page, where I can see a list of all books, in order to see the quantity of each book which is displayed under each book

  Scenario: try going to Product page
    Given I am on admin's Home page
    When I click "Product" in the navigation bar
    Then I am on admin's Product page, where I can see the quantity of each book.
