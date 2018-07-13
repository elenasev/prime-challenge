<?php
/**
 * Prime number validator interface
 *
 * @author  Elena Slavcheva
 */

namespace App\Service;

interface ValidatorInterface
{
    /**
     *  Checks the number if it is prime or not
     * 
     *  @param int $number a number to check
     * 
     * @return boolean
     */
    public function isPrime($number); 
}
