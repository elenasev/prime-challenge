<?php
use App\Renderer\TableRenderer;

class TableRendererTest extends PHPUnit_Framework_TestCase 
{
    private $_table_renderer;

    public function setUp() 
    {
        $this->_table_renderer = new TableRenderer();
    }

    public function testGetResultReturnsMultiplicationValues()
    {
        $numbers = [2, 3];

        $resultArray = array(
            0 => array(
                0 => 4,
                1 => 6
            ),
            1 => array(
                0 => 6,
                1 => 9
            )
        );

        $this->assertEquals(
            $resultArray,
            $this->_table_renderer->getResults($numbers)
        );
    }
}
