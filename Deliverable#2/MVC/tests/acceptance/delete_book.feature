Feature: delete_book
  In order to delete a book from Product page
  As an admin
  I need to go to Product page and click on "Delete" button on a book, then I need to confirm that I want to delete the book

  Scenario: try going to Product page
    Given I am on admin's Home page
    When I click "Product" in the navigation bar
    Then I am on admin's Product page

  Scenario: try deleting a book from Product page
    Given I am on dmin's Product page
    When I click "Delete" button on a book
    Then I see a popup message asking "Are you sure?"
  
  Scenario: try confirming to the popup message
    Given I see the popup message
    When I click "Yes" 
    Then the book is deleted from the Product page