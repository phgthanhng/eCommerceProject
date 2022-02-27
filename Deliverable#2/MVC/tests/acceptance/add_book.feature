Feature: add_book_sale
  In order to add products for sale
  As an admin
  I need to click on "Product" in the navigation bar and then click on "Add" button in order to AddBook page to add a book

  Scenario: try going to Product page
    Given I am on admin's Home page
    When I click "Product" in the navigation bar
    Then I am on admin's Product page

  Scenario: try getting the add new product form
    Given I am on admin's Product page
    When I click "Add" button 
    Then I see add new product form

  Scenario: try adding a new book
    Given I am on admin's Add Book page
    When I insert information of the new book in the form
    And I click the Add button in the bottom of the form
    Then I see a popup message says I have successfuly added the book

