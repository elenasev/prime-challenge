<?php
/**
 * Renderer factory class used to create renderers objects
 *
 * @author  Elena Slavcheva
 */

namespace App\Renderer;

use App\Renderer\TableRenderer;

class RendererFactory 
{
    /**
     * Creates a renderer object based on the provided arguments
     *
     * @param  array $argv Array of arguments passed to script
     * @param  array $argc The number of arguments passed to script
     * 
     * @return RendererInterface
     */
    public function createRenderer($argv = array(), $argc = 0)
    {
        $renderer = new TableRenderer();
        return $renderer;
    }
}
