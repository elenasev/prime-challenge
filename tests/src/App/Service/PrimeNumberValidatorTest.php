<?php
use App\Service\PrimeNumberValidator;

class PrimeNumberValidatorTest extends PHPUnit_Framework_TestCase 
{
    private $_prime_number_validation_service;

    public function setUp() 
    {
        $this->prime_number_validation_service = new PrimeNumberValidator();
    }

    public function testIsPrimeReturnsFalseWhenNumberIsNegative()
    {
        $this->assertFalse($this->prime_number_validation_service->isPrime(-10));
    }

    public function testIsPrimeReturnsFalseWhenNumberIsZero()
    {
        $this->assertFalse($this->prime_number_validation_service->isPrime(0));
    }

    public function testIsPrimeReturnsFalseWhenNumberIsOne()
    {
        $this->assertFalse($this->prime_number_validation_service->isPrime(1));
    }

    public function testIsPrimeReturnsTrueWhenNumberIsTwo()
    {
        $this->assertTrue($this->prime_number_validation_service->isPrime(2));
    }
    
    public function testIsPrimeReturnsTrueWhenNumberIsThree()
    {
        $this->assertTrue($this->prime_number_validation_service->isPrime(3));
    }

    public function testIsPrimeReturnsTrueWhenNumberIsPrimeAndLargerThanThree()
    {
        $this->assertTrue($this->prime_number_validation_service->isPrime(10859));
    }
    
    public function testIsPrimeReturnsFalseWhenNumberIsNotPrimeAndLargerThanThree()
    {
        $this->assertFalse($this->prime_number_validation_service->isPrime(10863));
    }
}
