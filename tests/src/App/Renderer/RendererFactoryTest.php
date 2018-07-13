<?php
use App\Renderer\RendererFactory;
use App\Renderer\TableRenderer;

class RendererFactoryTest extends PHPUnit_Framework_TestCase 
{
    public function testCanCreateTableRenderer()
    {
        $factory = new RendererFactory();
        $result = $factory->createRenderer();

        $this->assertInstanceOf(TableRenderer::class, $result);
    }
}
