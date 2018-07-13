<?php
/**
 * Abstract renderer class
 *
 * @author  Elena Slavcheva
 */

namespace App\Renderer;

abstract class AbstractRenderer
{
    /**
     * Generates the multiplication table array
     *
     * @param  array $numbers Array of prime numbers
     * 
     * @return array
     */
    public function getResults($numbers)
    {
        $rows = [];

        $total = sizeof($numbers);
        
        for ($col = 0, $row = 0; $col < $total - 1, $row < $total; $col++) {
            $rows[$row][$col] = $numbers[$row] * $numbers[$col];
            
            if ($col >= $total - 1) {
                $col = -1;
                $row++;
            }
        }
        return $rows;
    }
}
