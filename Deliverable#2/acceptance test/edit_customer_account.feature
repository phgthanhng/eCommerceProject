Feature: edit_customer_account
  In order to edit my account's information
  As a user
  I need to go to my Account page and click on the "Edit" button, then edit my information and click on the "Update" button

  Scenario: try going to my Account page
    Given I am on "localhost/Bookstore/Homepage"
    When I click "Account" in the navigation bar
    Then I am on "localhost/Bookstore/Homepage/Account"
  
  Scenario: try getting my account's information form
    Given I am on "localhost/Bookstore/Homepage/Account"
    When I click on the "Edit" button
    Then I see my account's information form
  
  Scenario: try editing my account's information
    Given I am on "localhost/Bookstore/Homepage/Account/EditAccount"
    When I edit my information 
    And I click on the "Update " button which locates in the bottom of the form
    Then I see a pop up message saying "Account's successfully updated"
