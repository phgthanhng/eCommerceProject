Feature: see_product_detail
  In order to see product detail or information
  As a user
  I need to go click a product in the main product page and get matching results

  Scenario: try clicking a product
  Given I am on "localhost/PlatformName/Product/"
  When I click a product in the product page
  Then I see "product description"

