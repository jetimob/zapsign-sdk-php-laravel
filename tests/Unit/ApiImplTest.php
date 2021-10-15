<?php

namespace Jetimob\ZapSign\Tests\Unit;

use Jetimob\ZapSign\Exception\RuntimeException;
use Jetimob\ZapSign\Tests\AbstractTestCase;

class ApiImplTest extends AbstractTestCase
{
    /** @test */
    public function unknownApiCallShouldThrowException(): void
    {
        $this->expectException(RuntimeException::class);
    }
}
