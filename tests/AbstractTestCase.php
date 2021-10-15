<?php

namespace Jetimob\ZapSign\Tests;

use Jetimob\ZapSign\ZapSignServiceProvider;
use Orchestra\Testbench\TestCase;

class AbstractTestCase extends TestCase
{
    /** @inheritDoc */
    protected function setUp(): void
    {
        parent::setUp();
        $this->assertTrue(
            config('zapsign.sandbox'),
            'Os testes DEVEM ser executados apenas em ambiente sandbox!',
        );
    }

    /** @inheritDoc */
    protected function getPackageProviders($app)
    {
        return [ZapSignServiceProvider::class];
    }
}
