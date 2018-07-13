# Coding Challenge #

## Objective ##
Write a program that prints out a multiplication table of the first 10 prime
numbers.
The program must run from the command line and print one table to
STDOUT.
The first row and column of the table should have the 10 primes, with
each cell containing the product of the primes for the corresponding row and
column.

### Notes ###
* Consider complexity. How fast does your code run? How does it scale?
* Consider cases where we want N primes.
* Do not use the Prime class from stdlib (write your own code).
* Write tests. Try to demonstrate TDD/BDD.

-------------

## Installation ##

```php composer.phar install```

--------------

## Usage ##

Without arguments to get the multiplication table for the first 10 prime numbers:
```
php bin/app.php 
```

Use a positive number as argument to get the table with N prime numbers
For example to generate the table for 20 prime numbers use:
```
php bin/app.php 20 
```

--------------

## Tests ##

PHPUnit:
```
php vendor/bin/phpunit
```

Behat:
```
php vendor/bin/behat
```
