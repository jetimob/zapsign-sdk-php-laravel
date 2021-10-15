<?php

namespace Jetimob\ZapSign\Api;

use Jetimob\Http\Request;
use Jetimob\ZapSign\Exception\InvalidArgumentException;
use Jetimob\ZapSign\Exception\ZapSignRequestException;
use Jetimob\ZapSign\ZapSign;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    private string $resourceToken;
//    protected ?string $exceptionClass = ZapSignRequestException::class;

    /**
     * AbstractApi constructor.
     * @param ZapSign $zapsign
     */
    public function __construct(ZapSign $zapsign)
    {
        parent::__construct($zapsign);
        $this->resourceToken = config('zapsign.api_key', '');
    }

    /**
     * @return string
     */
    public function getResourceToken(): string
    {
        return $this->resourceToken;
    }

    /**
     * Sobrescreve o X-Resource-Token da próxima requisição.
     *
     * @param string $resourceToken
     * @return $this
     */
    public function setResourceToken(string $resourceToken): self
    {
        $this->resourceToken = $resourceToken;
        return $this;
    }

    /**
     * Sobrescreve o X-Resource-Token da próxima requisição.
     *
     * @param string $resourceToken
     * @return $this
     */
    public function using(string $resourceToken): self
    {
        if (empty($resourceToken)) {
            throw new InvalidArgumentException('O token de recurso NÃO pode ser vazio!');
        }

        $this->resourceToken = $resourceToken;
        return $this;
    }

    protected function makeBaseRequest($method, $path, array $headers = [], $body = null): Request
    {
        return new Request($method, $path, $headers, $body);
    }
}
