<?php
/**
 * Service that generates prime numbers
 *
 * @author  Elena Slavcheva
 */

namespace App\Service;

use App\Service\PrimeNumberValidator;
use App\Service\PrimeNumbersServiceInterface;
use App\Service\AbstractPrimeNumbersService;

class PrimeNumbers extends AbstractPrimeNumbersService implements PrimeNumbersServiceInterface
{
    /**
     * Generate given quantity of prime numbers 
     *
     * @param  int $quantity how menu prime numbers to generate
     * 
     * @return array
     */
    public function getPrimeNumbers($quantity = 10) {
        $prime_numbers = [];
        $current_prime_number = 0;

        do {
            $current_prime_number++;
            if($this->validator->isPrime($current_prime_number)) {
                $prime_numbers[] = $current_prime_number;
            }
            
        } while (count($prime_numbers) < $quantity);
        
        return $prime_numbers;

    }
}
