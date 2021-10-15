<?php

namespace Jetimob\ZapSign\Http;

use Closure;
use GuzzleHttp\Psr7\Uri;
use Jetimob\Http\Exceptions\RuntimeException;
use Jetimob\Http\Http;
use Psr\Http\Message\RequestInterface;

class ApiKeyRequestMiddleware
{
    private Http $http;

    public function __construct(Http $http)
    {
        $this->http = $http;
    }

    public function __invoke(callable $handler): Closure
    {
        return function (RequestInterface $request, $options) use ($handler) {
            $apiKey = $this->http->getConfig('api_key');

            if (is_null($apiKey)) {
                throw new RuntimeException(
                    'There is no "api_key" defined in the configuration array'
                );
            }

            if (!is_string($apiKey)) {
                throw new RuntimeException(
                    '"api_key" MUST be an string'
                );
            }

            $request = $request->withUri(Uri::withQueryValue($request->getUri(), 'api_token', $apiKey));

            $this->http->setLastRequest($request);

            return $handler($request, $options);
        };
    }
}
