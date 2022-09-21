# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

## [2.0.0](https://github.com/jetimob/zapsign-sdk-php-laravel/compare/v1.1.0...v2.0.0) (2022-09-21)


### Bug Fixes

* altera métodos de extra_docsItemType para sua versão extraDocsItemType ([06b4842](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/06b48429ce0ef1faeeb27adb63eb1d58d104a5b2))
* gerando a exceção que era esperada no teste ([90c23fb](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/90c23fb47726fd32b25fd3ed36825f5f1f68ba70))

## 1.1.0 (2022-04-14)


### Features

* adiciona constantes de eventos e resolver de webhook ([4cd68b5](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/4cd68b543b8af516419c9c8d6ddd66e8390534fa))
* adiciona constantes de signatários e documentos ([5d96491](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/5d96491b7e881d55d6e9e1368ac462c62c1ed2b2))
* adiciona novos campos no signer ([8ba5593](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/8ba55931a0780b39404ee834152a5a8576521792))
* altera para objetos o resultado de getSigners na entity de Document ([883fb2f](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/883fb2f615c6cdeb482b3568f13d8591f3dc2651))
* realiza configuração inicial para o http da zapsign ([023f6ce](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/023f6ce99c123520d1c13290db52f6ba80376d74))


### Bug Fixes

* adiciona configuração padrão para sandbox ([be4db92](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/be4db92464bed73d432ae8b149fa0ac850248751))
* adiciona TypeList para os documentos extras ([20ee775](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/20ee775f9ef2d00897b8291f00b1269f9580cd27))
* altera class de extra_docs de self::class para Attachment::class ([6f88d33](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/6f88d3377beff576ce4f60b0a078e0ef16d9d9b7))
* corrige arquivo de teste de instalação ([2b6f355](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/2b6f355416e3ee1f8d6f194b3cd17f39d05fe869))
* corrige envio de pdf por base64 ([9100fc8](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/9100fc8d5a1bee0ded359bfe21927900df261804))
* corrige serviceprovider no composer.json ([0cb2721](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/0cb2721dc2f56ca103b973376344d99d1ff767f8))
* corrige testes e listagem de documentos ([72cc5e6](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/72cc5e66d866122bae7ae320453da84a38593d55))
* corrige tipos de retorno de metodos e endpoints com '/' ao final ([09ff3b9](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/09ff3b9622ce562e66a9094a64921b534ca0d415))
* corrige uso de trait duplicado para webhook ([f8e8406](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/f8e840623a216e5d04216b4f0ea566675b288831))
* movido o setSandbox para o construtor do documento ([a93045d](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/a93045d0835072f45183ee5127ba079df5c38802))
* remove serializable dos webhooks e adiciona TypeList para os documentos extras ([c6617f2](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/c6617f2d1c44b7ac16d869059790a91cd1f4bccc))

## 1.1.0 (2022-04-14)


### Features

* adiciona constantes de eventos e resolver de webhook ([4cd68b5](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/4cd68b543b8af516419c9c8d6ddd66e8390534fa))
* adiciona constantes de signatários e documentos ([5d96491](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/5d96491b7e881d55d6e9e1368ac462c62c1ed2b2))
* adiciona novos campos no signer ([8ba5593](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/8ba55931a0780b39404ee834152a5a8576521792))
* altera para objetos o resultado de getSigners na entity de Document ([883fb2f](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/883fb2f615c6cdeb482b3568f13d8591f3dc2651))
* realiza configuração inicial para o http da zapsign ([023f6ce](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/023f6ce99c123520d1c13290db52f6ba80376d74))


### Bug Fixes

* adiciona configuração padrão para sandbox ([be4db92](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/be4db92464bed73d432ae8b149fa0ac850248751))
* adiciona TypeList para os documentos extras ([20ee775](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/20ee775f9ef2d00897b8291f00b1269f9580cd27))
* altera class de extra_docs de self::class para Attachment::class ([6f88d33](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/6f88d3377beff576ce4f60b0a078e0ef16d9d9b7))
* corrige arquivo de teste de instalação ([2b6f355](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/2b6f355416e3ee1f8d6f194b3cd17f39d05fe869))
* corrige envio de pdf por base64 ([9100fc8](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/9100fc8d5a1bee0ded359bfe21927900df261804))
* corrige serviceprovider no composer.json ([0cb2721](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/0cb2721dc2f56ca103b973376344d99d1ff767f8))
* corrige testes e listagem de documentos ([72cc5e6](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/72cc5e66d866122bae7ae320453da84a38593d55))
* corrige tipos de retorno de metodos e endpoints com '/' ao final ([09ff3b9](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/09ff3b9622ce562e66a9094a64921b534ca0d415))
* corrige uso de trait duplicado para webhook ([f8e8406](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/f8e840623a216e5d04216b4f0ea566675b288831))
* movido o setSandbox para o construtor do documento ([a93045d](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/a93045d0835072f45183ee5127ba079df5c38802))
* remove serializable dos webhooks e adiciona TypeList para os documentos extras ([c6617f2](https://github.com/jetimob/zapsign-sdk-php-laravel/commit/c6617f2d1c44b7ac16d869059790a91cd1f4bccc))

## [2.0.0-beta.4](https://github.com/jetimob/juno-sdk-php-laravel/compare/v1.1.2...v2.0.0-beta.4) (2021-08-31)


### ⚠ BREAKING CHANGES

* diminui nível de acesso (de *public* para *protected) das propriedades DTO (`AccountDTO.php` e `AccountUpdateDTO.php`)
* `toDateString renomeado para dateToString`
* toda a api de acesso ao SDK foi redesenhada, incluindo o arquivo de configuração

### Features

* adiciona ChargeData para receber notificações do tipo CHARGE_STATUS_CHANGED ([36769d9](https://github.com/jetimob/juno-sdk-php-laravel/commit/36769d913eb46eae864f86dd8dc618033f186acd))
* adiciona mapping do objeto enviado pelo webhook gerado por CHARGE_STATUS_CHANGED ([0a8dd6c](https://github.com/jetimob/juno-sdk-php-laravel/commit/0a8dd6c6301651b45d6af6c556820abd0e2a39fc))
* move lógica do AbstractApi para o pacote `jetimob/http-php-laravel` ([c27ba45](https://github.com/jetimob/juno-sdk-php-laravel/commit/c27ba456c1a1c16c6acfa2a704d7b4a82942a3cb))
* muda endpoint de acordo com a variável ambiente ([68da080](https://github.com/jetimob/juno-sdk-php-laravel/commit/68da0807f9b73c36091b226bb4796105ea8c4575))


### Bug Fixes

* adiciona `bankNumber` ao construtor estático de `BankAccount` ([8393199](https://github.com/jetimob/juno-sdk-php-laravel/commit/83931996e98faf3a1e7d9dbe51d5f48a9f1dcec1))
* adiciona interface `JsonSerializable` em objetos de requisição ([bc5dc65](https://github.com/jetimob/juno-sdk-php-laravel/commit/bc5dc6527311bbb36b3e646cd627f5d83e886421))
* baixa versão do pacote `http-php-laravel` ([5025929](https://github.com/jetimob/juno-sdk-php-laravel/commit/50259293ac3cdaebe567c28b83da3c209f6be00b))
* corrige comando de instalação do pacote ([fc90cdd](https://github.com/jetimob/juno-sdk-php-laravel/commit/fc90cddc39f1eac4eef25938126c1fd5c9ddc43a))
* corrige retorno de vetores vazios ([25adc5d](https://github.com/jetimob/juno-sdk-php-laravel/commit/25adc5d34d307d14ca03efac536aed24ddb69548))
* refatora `setBankNumber` para aceitar nullable ([6d9ac92](https://github.com/jetimob/juno-sdk-php-laravel/commit/6d9ac921cb055d435bd15cf7905c9f76850928e5))


* implementa nova forma de interação com o SDK ([e0c67ad](https://github.com/jetimob/juno-sdk-php-laravel/commit/e0c67ad15207df939c3e9cd466ba61cd6cabdebc))
