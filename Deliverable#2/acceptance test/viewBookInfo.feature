Feature: viewBookInfo
  In order to see a book detail or information
  As a admin
  I need to go click a book in the list of books page and get matching results

  Scenario: try clicking a book
  Given I am on "localhost/BookStoreMVC/book/getBooks"
  When I hover to the Additional information
  And click Additional Information
  Then I see "About"

  Scenario: try clicking additional information button
  Given I am on "localhost/BookStoreMVC/book/getBooks"
  When I hover to the Additional information
  And click Additional Information
  Then I see "ISBN"

  Scenario: try clicking additional information button
  Given I am on "localhost/BookStoreMVC/book/getBooks"
  When I hover to the Additional information
  And click Additional Information
  Then I see "Published Date"

  Scenario: try clicking additional information button
  Given I am on "localhost/BookStoreMVC/book/getBooks"
  When I hover to the Additional information
  And click Additional Information
  Then I see "Language"

  Scenario: try clicking additional information button
  Given I am on "localhost/BookStoreMVC/book/getBooks"
  When I hover to the Additional information
  And click Additional Information
  Then I see "Publisher"

  Scenario: try clicking additional information button
  Given I am on "localhost/BookStoreMVC/book/getBooks"
  When I hover to the Additional information
  And click Additional Information
  Then I see "Page Count"

  Scenario: try clicking additional information button
  Given I am on "localhost/BookStoreMVC/book/getBooks"
  When I hover to the Additional information
  And click Additional Information
  Then I see "Size"