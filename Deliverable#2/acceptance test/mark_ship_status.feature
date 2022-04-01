Feature: mark_ship_status
  In order to mark the ship status
  As an admin
  I need to click the order detail and modify the shipping status is yes or no

  Scenario: try mark_ship_status is YES
  Given I am on "localhost/adminAllOrder/shipping_status"
  When I click an order is shipped
  Then I see "order shipping status is Yes"



