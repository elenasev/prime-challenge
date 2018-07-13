<?php
use App\Command\Cli;

class CliTest extends PHPUnit_Framework_TestCase 
{
    private $cli;

    public function setUp() 
    {
        $this->cli = new Cli();
    }

    /**
     * @expectedException \App\Command\InvalidArgumentsException
    */
    public function testRunThrowsExceptionWithInvalidArguments()
    {
        $argv = ["command","string"];
        $argc = 2;
        $this->cli->run($argv, $argc);
    }
}
