<?php
use App\Service\PrimeNumbers;
use App\Service\PrimeNumberValidator;

class PrimeNumbersTest extends PHPUnit_Framework_TestCase 
{
    private $prime_numbers_service;

    public function setUp() 
    {
        $validator = $this->getMockBuilder('\App\Service\PrimeNumberValidator')
            ->setMethods(array('isPrime'))
            ->getMock();

        $validator->expects($this->any())
             ->method('isPrime')
             ->will($this->returnValue(true));
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
}

