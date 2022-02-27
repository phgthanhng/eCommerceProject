Feature: view_customer_account
  In order to view a customer's account's information
  As an admin
  I need to go to User page and click on a user in order to see their information

  Scenario: try going to User page
    Given I am on the admin's Home page
    When I click "User" in the navigation bar
    Then I am on User page

  Scenario: try viewing a user's information
    Given I am on the admin's User page
    When I click on a user in the User page
    Then I see the information of the selected user


