<?php
use App\Renderer\TableRenderer;

class TableRendererTest extends PHPUnit_Framework_TestCase 
{
    public function testGetResultReturnsMultiplicationValues()
    {
        $table_renderer = new TableRenderer();

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
            $table_renderer->getResults($numbers)
        );
    }

    public function testRenderReturnsMultiplicationTableString()
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

        $table_renderer = $this->getMockBuilder('\App\Renderer\TableRenderer')
            ->setMethods(array('getResults'))
            ->getMock();

        $table_renderer->expects($this->once())
            ->method('getResults')
            ->will($this->returnValue($resultArray));

        $expectedString = "     | 2   | 3   |\n\n";
        $expectedString .= " 2   | 4   | 6   |\n\n";
        $expectedString .= " 3   | 6   | 9   |\n\n";


        $this->assertEquals($expectedString, $table_renderer->render($numbers));
    }
}
