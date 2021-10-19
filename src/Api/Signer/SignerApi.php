<?php

namespace Jetimob\ZapSign\Api\Signer;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\ZapSign\Api\AbstractApi;

/**
 * @link https://docs.zapsign.com.br/signatario
 */
class SignerApi extends AbstractApi
{
    /**
     * @param string $signerToken
     * @return SignerResponse
     * @link https://docs.zapsign.com.br/signatarios/detalhar-signatario
     */
    public function find(string $signerToken): SignerResponse
    {
        return $this->mappedGet("signers/{$signerToken}/", SignerResponse::class);
    }

    /**
     * @param SignerDTO $signer
     * @param string $documentToken
     * @return SignerResponse
     * @link https://docs.zapsign.com.br/signatarios/adicionar-signatario
     */
    public function create(SignerDTO $signer, string $documentToken): SignerResponse
    {
        return $this->mappedPost("docs/{$documentToken}/add-signer/", SignerResponse::class, [
            RequestOptions::JSON => $signer,
        ]);
    }

    /**
     * @param SignerDTO $signer
     * @param string $signerToken
     * @return SignerResponse
     * @link https://docs.zapsign.com.br/signatarios/atualizar-signatario
     */
    public function update(SignerDTO $signer, string $signerToken): SignerResponse
    {
        return $this->mappedPost("signers/{$signerToken}/", SignerResponse::class, [
            RequestOptions::JSON => $signer,
        ]);
    }

    /**
     * @param string $signerToken
     * @return Response
     * @link https://docs.zapsign.com.br/signatarios/excluir-signatario
     */
    public function delete(string $signerToken): Response
    {
        return $this->request('delete', "signer/{$signerToken}/remove/");
    }
}
