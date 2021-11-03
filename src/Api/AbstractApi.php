<?php

declare(strict_types=1);

namespace Jetimob\ZapSign\Api;

use Jetimob\Http\Request;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    protected function makeBaseRequest($method, $path, array $headers = [], $body = null): Request
    {
        return new Request($method, $path, $headers, $body);
    }

}
