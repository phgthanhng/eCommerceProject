Feature: updateCartBookQuantity
  In order to update the quantity of the book in the cart
  As a customer
  I need to click the + and - button to update the book quantity in the shopping cart

  Scenario: try updateCartBookQuantity
  Given I am on "localhost/BookStoreMVC/ShoppingCart/getCartBooks"
  When I go hover to the + button
  And click +
  Then I see "Book Quantity updated"

  Scenario: try updateCartBookQuantity
  Given I am on "localhost/BookStoreMVC/ShoppingCart/getCartBooks"
  When I go hover to the - button
  And click -
  Then I see "Book Quantity updated"

  Scenario: try updateCartBookQuantity
  Given I am on "localhost/BookStoreMVC/ShoppingCart/getCartBooks"
  When I go hover to the - button
  And I see there is only 1 quantity of that specific book
  And I click -
  Then I see "Book quantity not updated"