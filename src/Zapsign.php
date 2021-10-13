<?php

namespace Jetimob\Zapsign;

use Jetimob\Http\Contracts\HttpProviderContract;
use Jetimob\Http\Http;
use Jetimob\Zapsign\Api\Account\AccountApi;
use Jetimob\Zapsign\Api\AdditionalData\AdditionalDataApi;
use Jetimob\Zapsign\Api\Balance\BalanceApi;
use Jetimob\Zapsign\Api\Charge\ChargeApi;
use Jetimob\Zapsign\Api\Credentials\CredentialsApi;
use Jetimob\Zapsign\Api\Document\DocumentApi;
use Jetimob\Zapsign\Api\Pix\PixApi;
use Jetimob\Zapsign\Api\Transference\TransferenceApi;
use Jetimob\Zapsign\Api\Webhook\WebhookApi;
use Jetimob\Zapsign\Exception\RuntimeException;

/**
 * @method AccountApi account()
 * @method AdditionalDataApi additionalData()
 * @method BalanceApi balance()
 * @method ChargeApi charge()
 * @method CredentialsApi credentials()
 * @method DocumentApi documents()
 * @method PixApi pix()
 * @method TransferenceApi transference()
 * @method WebhookApi webhook()
 */
class Zapsign implements HttpProviderContract
{
    public const VERSION = 1.0;
    /**
     * O versionamento da API é realizado diretamente no endpoint, portanto caso uma versão nova seja lançada deve-se mudar a baseUri
     * @link https://docs.zapsign.com.br/versionamento-da-api-
     */
    protected string $baseUri = 'https://api.zapsign.com.br/api/v1/docs/';
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
