<?php
/**
 * Factory class to create prime numbers services objects
 * for generating prime numbers
 *
 * @author  Elena Slavcheva
 */

namespace App\Service;

use App\Service\PrimeNumbers;
use App\Service\PrimeNumberValidator;

class PrimeNumbersServiceFactory 
{
    /**
     * Creates a prime numbers service object based on the provided arguments
     *
     * @param  array $argv Array of arguments passed to script
     * @param  array $argc The number of arguments passed to script
     * 
     * @return PrimeNumbersServiceInterface
     */
    public function createService($argv = array(), $argc = 0)
    {
        $validator = new PrimeNumberValidator();
        $service = new PrimeNumbers($validator);
        return $service;
    }
}
