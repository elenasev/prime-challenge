<?php
/**
 * Prime number validator checking if a given number is prime or not
 * using the simple primality test method with 6k ± 1 optimization
 * reference https://en.wikipedia.org/wiki/Primality_test
 *
 * @author  Elena Slavcheva
 */
namespace App\Service;

use App\Service\ValidatorInterface;

class PrimeNumberValidator implements ValidatorInterface
{
    /**
     *  Checks the number if it is prime or not
     * 
     *  @param int $number a number to check
     * 
     * @return boolean
     */
    public function isPrime($number) 
    {
        if( $number <= 1 ) {
            return false;
        } else if( $number <= 3) {
            return true;
        } else if( ($number % 2 == 0) || ($number % 3 == 0) ) {
            return false;
        } else {
            $i = 5;
            while( $i*$i <= $number ) {
                if( ($number % $i == 0) || ($number % ($i+2) == 0) ) {
                    return false;
                }
                $i = $i + 6;
            }

            return true;
        }
    }
}
