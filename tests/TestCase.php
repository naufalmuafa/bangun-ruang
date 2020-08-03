<?php

namespace Naufal\BangunRuang\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [\Naufal\BangunRuang\Providers\BangunRuangServiceProvider::class];
    }

    protected function setUp(): void
    {
        parent::setUp();

    }
}