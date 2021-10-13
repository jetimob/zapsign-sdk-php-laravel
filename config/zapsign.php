<?php

declare(strict_types=1);

/*
 |--------------------------------------------------------------------------
 | ENDPOINTS
 |--------------------------------------------------------------------------
 |
 | @link https://dev.juno.com.br/api/v2#tag/Componentes
 |
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Zapsign Sandbox
    |--------------------------------------------------------------------------
    |
    | Deve ser informado se o SDK será executado em modo de Sandbox (true|false)
    |
    |
    |
    */
    'sandbox' => env('ZAPSIGN_SANDBOX', true),

    'http' => [
        /*
        |--------------------------------------------------------------------------
        | Client Secret
        |--------------------------------------------------------------------------
        |
        | Deve ser gerado dentro do painel da Zapsign
        | @link https://dev.juno.com.br/api/v2#operation/getAccessToken
        |
        */

        'api_key' => env('ZAPSIGN_API_KEY'),

        /*
        |--------------------------------------------------------------------------
        | Retries
        |--------------------------------------------------------------------------
        |
        | Quantas vezes uma requisição pode ser reexecutada (em caso de falha) antes de gerar uma exceção.
        |
        */

        'retries' => 0,

        /*
        |--------------------------------------------------------------------------
        | Retry On Status Code
        |--------------------------------------------------------------------------
        |
        | Em quais códigos HTTP de uma resposta falha podemos tentar reexecutar a requisição.
        |
        */

        'retry_on_status_code' => [401],

        /*
        |--------------------------------------------------------------------------
        | Retry Delay
        |--------------------------------------------------------------------------
        |
        | Antes de tentar reexecutar uma requisição falha, aguardar em ms.
        |
        */

        'retry_delay' => 2000,

        /*
        |--------------------------------------------------------------------------
        | Guzzle
        |--------------------------------------------------------------------------
        |
        | Configurações passadas à instância do Guzzle.
        | @link https://docs.guzzlephp.org/en/stable/request-options.html
        |
        */

        'guzzle' => [
            /*
            |--------------------------------------------------------------------------
            | Connect Timeout
            |--------------------------------------------------------------------------
            |
            | Quantos segundos esperar por uma conexão com o servidor. "0" significa sem limite de espera.
            | https://docs.guzzlephp.org/en/stable/request-options.html#connect-timeout
            |
            */

            'connect_timeout' => 10.0,

            /*
            |--------------------------------------------------------------------------
            | Timeout
            |--------------------------------------------------------------------------
            |
            | Quantos segundos esperar pela resposta do servidor. "0" significa sem limite de espera.
            | @link https://docs.guzzlephp.org/en/stable/request-options.html#timeout
            |
            */

            'timeout' => 0.0,

            /*
            |--------------------------------------------------------------------------
            | Debug
            |--------------------------------------------------------------------------
            |
            | Usar true para ativar o modo debug do Guzzle.
            | @link https://docs.guzzlephp.org/en/stable/request-options.html#debug
            |
            */

            'debug' => false,

            /*
            |--------------------------------------------------------------------------
            | Middlewares
            |--------------------------------------------------------------------------
            |
            | @link https://docs.guzzlephp.org/en/stable/handlers-and-middleware.html#middleware
            |
            */

            'middlewares' => [
                \Jetimob\Http\Middlewares\OAuthRequestMiddleware::class,
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Implementação dos endpoints da API
    |--------------------------------------------------------------------------
    |
    | Escolheu-se dar a opção de sobrescrever a implementação de um endpoint para que, se necessário, possam ser
    | modificados sem a necessidade de alterar o pacote original.
    |
    | A única obrigatoriedade é que a classe estenda \Jetimob\Juno\Api\AbstractApi.
    |
    | Chaves também podem ser adicionadas neste vetor e assim serem chamadas direto da facade.
    |
    */

    'api_impl' => [
        'account' => \Jetimob\Juno\Api\Account\AccountApi::class,
        'additionalData' => \Jetimob\Juno\Api\AdditionalData\AdditionalDataApi::class,
        'balance' => \Jetimob\Juno\Api\Balance\BalanceApi::class,
        'charge' => \Jetimob\Juno\Api\Charge\ChargeApi::class,
        'credentials' => \Jetimob\Juno\Api\Credentials\CredentialsApi::class,
        'document' => \Jetimob\Juno\Api\Document\DocumentApi::class,
        'pix' => \Jetimob\Juno\Api\Pix\PixApi::class,
        'transference' => \Jetimob\Juno\Api\Transference\TransferenceApi::class,
        'webhook' => \Jetimob\Juno\Api\Webhook\WebhookApi::class,
    ],
];
