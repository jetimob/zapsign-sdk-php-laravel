<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | ZapSign Sandbox
    |--------------------------------------------------------------------------
    |
    | Deve ser informado se o SDK será executado em modo de Sandbox (true|false)
    */
    'sandbox' => env('ZAPSIGN_SANDBOX', true),

    'http' => [
        /*
        |--------------------------------------------------------------------------
        | Api Key
        |--------------------------------------------------------------------------
        |
        | Deve ser gerado dentro do painel da ZapSign
        | @link https://docs.zapsign.com.br/
        |
        */

        'api_key' => env('ZAPSIGN_API_KEY'),
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
            | Middlewares
            |--------------------------------------------------------------------------
            |
            | @link https://docs.guzzlephp.org/en/stable/handlers-and-middleware.html#middleware
            |
            */

            'middlewares' => [
                \Jetimob\ZapSign\Http\ApiKeyRequestMiddleware::class,
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

    ],
];
