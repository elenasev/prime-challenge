Feature: Prime Numbers Multiplication Table
  In order to print out multiplication table of prime numbers
  I need to provide the quantity of the numbers
  Or no quantity for the first 10 prime numbers
  Then I should get the multiplication table

Scenario: Display multiplication table for the first 10 prime numbers
  Given I do not provide argument with the quantity of the numbers
  When I execute the script
  Then I should get the multiplication table for the first 10 prime numbers

Scenario Outline: Display multiplication table for the first <quantity> prime numbers
  Given I provide an argument with the <quantity> of the numbers
  When I execute the script 
  Then I should get the multiplication table for the first <n> prime numbers

  Examples:
    | n  | quantity |
    | 2  | 2        |
    | 11 | 11       |

Scenario: Get an error when I provide a invalid argument value
    Given I provide an argument which is not an integer
    When I execute the script
    Then I should get an error message 'Invalid argument. Please provide a positive integer.'
