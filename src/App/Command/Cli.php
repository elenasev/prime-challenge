<?php
/**
 * The Cli class used to validate the arguments passed to the script,
 * generate the prime numbers and returns the multiplication table
 *
 * @author  Elena Slavcheva
 */

namespace App\Command;

use App\Service\PrimeNumbersServiceFactory;
use App\Renderer\RendererFactory;

class Cli 
{
    /**
     * Runs the program with the provided arguments
     *
     * @param  array $argv Array of arguments passed to script
     * @param  array $argc The number of arguments passed to script
     * 
     * @throws InvalidArgumentsException if the provided arguments are invalid
     */
    public function run($argv, $argc) 
    {
        if($this->validateArguments($argv, $argc)) {
            if($argc == 1) {
                $quantity = 10;
            } else {
                $quantity = $argv[1];
            }
            $prime_numbers_service = $this->getPrimeNumbersService($argv, $argc);
            $numbers = $prime_numbers_service->getPrimeNumbers($quantity);
            $renderer = $this->getRenderer($argv, $argc);
            print($renderer->render($numbers));
        } else {
            throw new InvalidArgumentsException('Invalid argument. Please provide a positive integer.');
        }
    }

    /**
     * Validates the provided arguments
     *
     * @param  array $argv Array of arguments passed to script
     * @param  array $argc The number of arguments passed to script
     * 
     * @return boolean
     */
    private function validateArguments($argv, $argc) 
    {
        if($argc == 1) {
            return true;
        } else {
            if(is_numeric($argv[1])) {
                $argument = $argv[1] + 0;
                if(is_int($argument) && $argument>=1) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
            
        }
    }

    /**
     * Get a prime number service 
     *
     * @param  array $argv Array of arguments passed to script
     * @param  array $argc The number of arguments passed to script
     * 
     * @return PrimeNumbersServiceInterface
     */
    private function getPrimeNumbersService($argv, $argc)
    {
        $factory = new PrimeNumbersServiceFactory();
        return $factory->createService($argv, $argc);
    }
    
    /**
     * Get a renderer
     *
     * @param  array $argv Array of arguments passed to script
     * @param  array $argc The number of arguments passed to script
     * 
     * @return RendererInterface
     */
    private function getRenderer($argv, $argc)
    {
        $factory = new RendererFactory();
        return $factory->createRenderer($argv, $argc);
    }
}
