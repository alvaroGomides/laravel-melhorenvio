<?php

namespace AlvaroGomides\LaravelMelhorenvio\Tests;

use Orchestra\Testbench\TestCase;
use AlvaroGomides\LaravelMelhorenvio\LaravelMelhorenvioServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelMelhorenvioServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
