<?php
/**
 * Renderer Interface
 *
 * @author  Elena Slavcheva
 */

namespace App\Renderer;

interface RendererInterface
{
    /**
     * @param array $numbers
     * @param string
     */
    public function render($numbers = []);

    /**
     * @param array $numbers
     * @return array
     */
    public function getResults($numbers);
}

