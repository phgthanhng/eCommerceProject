Feature: social_media_button
  In order to go to a social media's account of the store
  As a user
  I need to click on either "Facebook" icon or "Instagram" icon in the header of the web application

  Scenario: try going to a socia media's account of the store
    Given I am on the customer's Home page
    When I click on either "Facebook" icon or "Instagram" icon in the header
    Then I will be directed to either the store's Facebook account or the store's Instagram account

