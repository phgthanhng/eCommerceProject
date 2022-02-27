Feature: view_product_purchases
  In order to view the product purchases and information
  As an admin
  I need to go click the order in the all orders page and get matching results.

  Scenario: try view_product_purchases
  Given I am on "localhost/adminAllOrder/order"
  When I click an order in the all order page
  And go to Order detail page
  Then I see "order information"



