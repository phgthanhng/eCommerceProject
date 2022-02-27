Feature: viewOrderHistory
  In order to view the list of orders
  As a customer
  I need to go to the order history

  Scenario: try clickig Order History
  Given I am on "localhost/BookStoreMVC/.../getOrderHistory
  When I go hover on Order History 
  And click Order History
  Then I see "Your Orders"

  Scenario: try clicking Order History
  Given I am on "localhost/BookStoreMVC/.../getOrderHistory
  When I go hover on Order History 
  And click Order History
  Then I see "Order Details"

