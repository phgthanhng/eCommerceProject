Feature: filterSearchCustomer
In order to filter the list of books
As a customer
I need to choose which button to click in the filter by section in order to get a filtered results of the books

Scenario: try clicking "Category"
Given I am on "localhost/BookStoreMVC/book/getBooks"
When I go to the Filter By: section and hover in the Category button 
And click Category
Then I see "Fiction"

Scenario: try clicking "Category"
Given I am on "localhost/BookStoreMVC/book/getBooks"
When I go to the Filter By: section and hover in the Category button 
And click Category
Then I see "Arts"

Scenario: try clicking "Price"
Given I am on "localhost/BookStoreMVC/book/getBooks"
When I go to the Filter By: section and hover in the Price button 
And click Price
Then I see "Under $5"

Scenario: try clicking "Price"
Given I am on "localhost/BookStoreMVC/book/getBooks/"
When I go to the Filter By: section and hover in the Price button 
And click Price
Then I see "$5 - $10"





