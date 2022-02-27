Feature: edit_book
  In order to edit a book for sale
  As an admin
  I need to go to Product page and click on "Edit" button of a book to modify its information.

  Scenario: try going to Product page
    Given I am on admin's Home page
    When I click "Product" in the navigation bar
    Then I am on admin's Product page

  Scenario: try going to the book's information form
    Given I am on admin's Product page
    When I click on the "Edit" button of a book
    I see the book's information form page

  Scenario: try editing the book's information form
    Given I am on the book's information form page
    When I edit the form
    And I click the "Update" button which locates in the bottom of the form
    I see a popup message saying "The book is successfuly updated"
