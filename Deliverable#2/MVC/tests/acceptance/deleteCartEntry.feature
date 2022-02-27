Feature: deleteCartEntry
  In order to delete a book in the cart
  As a customer
  I need to go click the delete and check the changes in the shopping cart

  Scenario: try deleteCartEntry
  Given I am on "localhost/BookStoreMVC/ShoppingCart/getCartBooks
  When I hover to a book in the cart
  And click Delete
  Then I see "Book deleted successfully"
