Feature: cancel_order
  In order to cance an order
  As a client
  I need to click cancel order

  Scenario: try cancel_order
  Given I am on "localhost/client/order"
  When I click cancle order
  Then I see "Do you want to cancel this order?"
