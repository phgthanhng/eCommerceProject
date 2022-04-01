Feature: checkOrderDetail
  In order to check the order details
  As a customer
  I need to go to the order history

  Scenario: try clicking Order Detail
  Given I am on "localhost/BookStoreMVC/Order/getOrderHistory
  When I go hover on Order History 
  And click Order Detail
  Then I see "Order Summary"

  Scenario: try clicking Order Detail
  Given I am on "localhost/BookStoreMVC/Order/getOrderDetail/1
  When I go hover on Order History 
  And click Order Detail
  Then I see "Payment Method"

  Scenario: try clicking Order Detail
  Given I am on "localhost/BookStoreMVC/Order/getOrderDetail/1
  When I go hover on Order History 
  And click Order Detail
  Then I see "Shipping Address"