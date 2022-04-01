Feature: storeProfile
  In order to create or update about us information of the page
  As a admin 
  I need to be able to access the edit Contact Us button and make changes to the information for that page view

  Scenario: try storeProfile
  Given I am on "localhost/BookStoreMVC/StoreProfile/editProfile
  When I hover to the edit About Us in the page
  And click edit Contact Us
  Then I see "Phone Number"

  Scenario: try storeProfile
  Given I am on "localhost/BookStoreMVC/StoreProfile/editProfile
  When I hover to the edit About Us in the page
  And click edit Contact Us
  Then I see "Email"
