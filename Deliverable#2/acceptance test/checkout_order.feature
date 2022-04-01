Feature: checkout_order
  In order to checkout an order
  As a customer
  I need to click the checkout button

  Scenario: try checkout_order
  Given I am on "localhost/clientOrder/checkout"
  When I click checkout button in shopping cart page
  And I go to Complete order page
  Then I see "Payment Information"
