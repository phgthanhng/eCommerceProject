Feature: extraFeatureLocationMap
  In order to see the location via google map
  As a customer/admin
  I need to click the Location button in the navigation bar

  Scenario: try seeing main location
  Given I am on "localhost/BookStoreMVC/Home/index
  When I hover to the Location in the navigation bar
  And click Location 
  Then I see "Google Map Location : "


