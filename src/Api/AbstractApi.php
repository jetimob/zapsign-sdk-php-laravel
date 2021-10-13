<?php

namespace Jetimob\Zapsign\Api;

use Jetimob\Http\Request;
use Jetimob\Zapsign\Exception\InvalidArgumentException;
use Jetimob\Zapsign\Exception\ZapsignRequestException;
use Jetimob\Zapsign\Zapsign;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    private string $resourceToken;
    protected ?string $exceptionClass = ZapsignRequestException::class;

    /**
     * AbstractApi constructor.
     * @param Zapsign $zapsign
     */
    public function __construct(Zapsign $zapsign)
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
        return (new AuthorizedRequest($method, $path, $headers, $body))
            ->withAddedHeader('X-Resource-Token', $this->resourceToken);
    }
}
