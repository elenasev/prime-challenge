<?php
/**
 * Abstract prime number service class 
 *
 * @author  Elena Slavcheva
 */

namespace App\Service;

use App\Service\ValidatorInterface;

abstract class AbstractPrimeNumbersService 
{
    /**
     * @var ValidatorInterface
     */
    protected $validator;
    /**
     * @param ValidatorInterface $validator
     */
    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

}
