<?php

namespace Jetimob\ZapSign\Api\Document;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\ZapSign\Api\AbstractApi;

/**
 * @link https://docs.zapsign.com.br/documentos
 */
class DocumentApi extends AbstractApi
{
    /**
     * @return DocumentListResponse
     * @link https://docs.zapsign.com.br/documentos/listar-documentos
     */
    public function list(): DocumentListResponse
    {
        return $this->mappedGet('docs/', DocumentListResponse::class);
    }

    /**
     * @param string $documentToken
     * @return DocumentResponse
     * @link https://docs.zapsign.com.br/documentos/detalhar-documento
     */
    public function find(string $documentToken): DocumentResponse
    {
        return $this->mappedGet("docs/{$documentToken}/", DocumentResponse::class);
    }

    /**
     * @param DocumentDTO $document
     * @return DocumentResponse
     * @link https://docs.zapsign.com.br/documentos/criar-documento
     */
    public function create(DocumentDTO $document): DocumentResponse
    {
        return $this->mappedPost('docs/', DocumentResponse::class, [
            RequestOptions::JSON => $document,
        ]);
    }

    /**
     * @param AttachmentDTO $attachment
     * @param string $documentToken
     * @return DocumentResponse
     * @link https://docs.zapsign.com.br/documentos/adicionar-anexo-documento-extra
     */
    public function attach(AttachmentDTO $attachment, string $documentToken): DocumentResponse
    {
        return $this->mappedPost("docs/{$documentToken}/upload-extra-doc/", DocumentResponse::class, [
            RequestOptions::JSON => $attachment,
        ]);
    }

    /**
     * @param string $documentToken
     * @return Response
     * @link https://docs.zapsign.com.br/documentos/excluir-documento
     */
    public function delete(string $documentToken): Response
    {
        return $this->request('delete', "docs/{$documentToken}/");
    }
}
