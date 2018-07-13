#!/usr/bin/env php
<?php

require __DIR__.'/../src/autoload.php';

use App\Command\Cli;

$cli = new Cli();
try {
    $cli->run($argv, $argc);
} catch(\Exception $e) {
    print $e->getMessage();
}



