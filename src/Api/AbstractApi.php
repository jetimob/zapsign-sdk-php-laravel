<?php

namespace Jetimob\ZapSign\Api;

use Jetimob\Http\Request;
use Jetimob\ZapSign\Exception\InvalidArgumentException;
use Jetimob\ZapSign\Exception\ZapSignRequestException;
use Jetimob\ZapSign\ZapSign;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    protected function makeBaseRequest($method, $path, array $headers = [], $body = null): Request
    {
        return new Request($method, $path, $headers, $body);
    }

}
