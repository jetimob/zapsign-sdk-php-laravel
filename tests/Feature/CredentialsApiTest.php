<?php

namespace Jetimob\Juno\Tests\Feature;

use Jetimob\Juno\Api\Credentials\CredentialsApi;
use Jetimob\Juno\Facades\Zapsign;
use Jetimob\Juno\Tests\AbstractTestCase;

class CredentialsApiTest extends AbstractTestCase
{
    protected CredentialsApi $api;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = Zapsign::credentials();
    }

    /** @test */
    public function credentialsApiShouldExist(): void
    {
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(CredentialsApi::class, $this->api);
    }

    /** @test */
    public function credentialsResponseShouldNotBeEmpty(): void
    {
        $response = $this->api->credentials();
        $this->assertNotEmpty($response);
    }
}
