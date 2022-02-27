Feature: addToCart
  In order to add a book to the cart
  As a customer
  I need to go click the add book and check the shopping cart if the book was added to it

  Scenario: try clicking Add Book button
  Given I am on "localhost/BookStoreMVC/book/getBooks
  When I hover to the Add Book 
  And click Add Book
  Then I see "Book added to cart successfully"

  Scenario: try clicking Add Book button
  Given I am on "localhost/BookStoreMVC/book/getBooks/1
  When I hover to the Add Book
  And click Add Book
  Then I see "Book added to cart successfully"

