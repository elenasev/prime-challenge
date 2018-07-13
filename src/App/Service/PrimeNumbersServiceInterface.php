<?php
/**
 * Prime numbers service interface
 *
 * @author  Elena Slavcheva
 */

namespace App\Service;

interface PrimeNumbersServiceInterface
{
    /**
     * @param int $quantity how many prime numbers to generate
     * 
     * @return array
     */
    public function getPrimeNumbers($quantity = 10);
}
