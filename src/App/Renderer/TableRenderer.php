<?php
/**
 * Formats the multiplication array of the prime numbers 
 * into a table and return it as a string 
 *
 * @author  Elena Slavcheva
 */

namespace App\Renderer;

use App\Renderer\RendererInterface;
use App\Renderer\AbstractRenderer;

class TableRenderer extends AbstractRenderer implements RendererInterface
{
    /**
     * Formats the multiplication array of the provided prime 
     * numbers into a table
     *
     * @param  array $numbers Array of prime numbers
     * 
     * @return string
     */
    public function render($numbers = [])
    {
        $results = $this->getResults($numbers);
        $output = "     ";
        foreach($numbers as $key => $col) {
            $output .= "| " . str_pad($numbers[$key], 4, " ",STR_PAD_RIGHT);
        }
        $output .= "|\n\n";

        foreach($results as $row => $columns) {
            $output .= " " . str_pad($numbers[$row], 4, " ",STR_PAD_RIGHT);
            foreach($columns as $col => $res) {
                $output .= "| " . str_pad($res, 4, " ",STR_PAD_RIGHT);
            }
            $output .= "|\n\n";
        }

        return $output;
    }
}
