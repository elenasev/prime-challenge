<?php
use App\Service\PrimeNumbers;
use App\Service\PrimeNumberValidator;

class PrimeNumbersTest extends PHPUnit_Framework_TestCase 
{
    private $prime_numbers_service;

    public function setUp() 
    {
        $validator = new PrimeNumberValidator();
        $this->prime_numbers_service = new PrimeNumbers($validator);
    }

    public function testGetPrimeNumbersReturnAnArray()
    {
        $this->assertTrue(is_array($this->prime_numbers_service->getPrimeNumbers()));
    }

    public function testGetPrimeNumbersReturnsAnArrayWithTenValuesNoArgumentIsPassed()
    {
        $this->assertTrue(count($this->prime_numbers_service->getPrimeNumbers()) == 10);
    }

    public function testGetPrimeNumbersReturnsAnArrayWithNValuesWhenNIsPassedAsArgument()
    {
        $this->assertTrue(count($this->prime_numbers_service->getPrimeNumbers(2)) == 2);
    }

    public function testGetPrimeNumbersReturnsAnArrayWithTenPrimeNumbers()
    {
        $this->assertEquals(
            [2, 3, 5, 7, 11, 13, 17, 19, 23, 29],
            $this->prime_numbers_service->getPrimeNumbers()
        );
    }

    public function testGetPrimeNumbersReturnsAnArrayWithNPrimeNumbers()
    {
        $this->assertEquals(
            [2, 3, 5, 7, 11],
            $this->prime_numbers_service->getPrimeNumbers(5)
        );
    }
}

