<?php

namespace Jetimob\Juno\Tests\Feature;

use Jetimob\Juno\Api\Balance\BalanceApi;
use Jetimob\Juno\Api\Balance\BalanceResponse;
use Jetimob\Juno\Exception\ZapsignRequestException;
use Jetimob\Juno\Facades\Zapsign;
use Jetimob\Juno\Tests\AbstractTestCase;

class BalanceApiTest extends AbstractTestCase
{
    protected BalanceApi $api;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = Zapsign::balance();
    }

    /** @test */
    public function balanceApiShouldExist(): void
    {
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(BalanceApi::class, $this->api);
    }

    /** @test */
    public function balanceResponseShouldSucceed(): void
    {
        $response = $this->api->get();
        $this->assertInstanceOf(BalanceResponse::class, $response);
        $this->assertIsFloat($response->getBalance());
        $this->assertIsFloat($response->getTransferableBalance());
        $this->assertIsFloat($response->getWithheldBalance());
    }

    /** @test */
    public function requestWithoutCredentialsShouldFail(): void
    {
        $this->expectException(ZapsignRequestException::class);
        $this->api->using('123')->get();
    }
}
