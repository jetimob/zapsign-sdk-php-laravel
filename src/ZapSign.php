<?php

namespace Jetimob\ZapSign;

use Jetimob\Http\Contracts\HttpProviderContract;
use Jetimob\Http\Http;
use Jetimob\ZapSign\Exception\RuntimeException;

class ZapSign implements HttpProviderContract
{
    public const VERSION = 1.0;
    /**
     * O versionamento da API é realizado diretamente no endpoint, portanto caso uma versão nova seja lançada deve-se mudar a baseUri
     * @link https://docs.zapsign.com.br/versionamento-da-api
     */
    protected string $baseUri = 'https://api.zapsign.com.br/api/v1/';
    protected Http $client;
    protected array $config;

    public function __construct(array $config = [])
    {
        $http = array_merge($config['http'] ?? [], [
            'base_uri' => $this->baseUri,
        ]);

        $this->client = new Http($http);
        $this->config = $config;
    }

    /**
     * @return Http
     */
    public function getHttpInstance(): Http
    {
        return $this->client;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config ?? [];
    }

    public function __call(string $name, array $arguments)
    {
        if (!($apiImpl = $this->config['api_impl'] ?? null) || !array_key_exists($name, $apiImpl)) {
            throw new RuntimeException("O endpoint '$name' não foi implementado ou não existe");
        }

        return new $apiImpl[$name]($this);
    }
}
