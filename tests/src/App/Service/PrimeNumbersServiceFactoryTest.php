<?php
use App\Service\PrimeNumbersServiceFactory;
use App\Service\PrimeNumbers;

class PrimeNumbersServiceFactoryTest extends PHPUnit_Framework_TestCase 
{
    public function testCanCreatePrimeNumbersService()
    {
        $factory = new PrimeNumbersServiceFactory();
        $result = $factory->createService();

        $this->assertInstanceOf(PrimeNumbers::class, $result);
    }
}
