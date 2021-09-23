<?php

namespace Jetimob\Zapsign\Entity;

use Jetimob\Http\Traits\Serializable;

abstract class BaseDocument
{
    use Serializable;

    /** @var string $name Nome do documento. Máximo 255 caracteres */
    protected string $name;

    /** @var string $urlPdf URL pública do PDF. Máximo 10Mb */
    protected string $urlPdf;

    /** @var string|null $base64 Alternativa ao $urlPdf */
    protected ?string $base64;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name Nome do documento. Máximo 255 caracteres
     * @return BaseDocument
     */
    public function setName(string $name): BaseDocument
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlPdf(): string
    {
        return $this->urlPdf;
    }

    /**
     * @param string $urlPdf URL pública do PDF. Máximo 10Mb
     * @return BaseDocument
     */
    public function setUrlPdf(string $urlPdf): BaseDocument
    {
        $this->urlPdf = $urlPdf;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase64(): string
    {
        return $this->base64;
    }

    /**
     * @param string $base64 Alternativa ao $urlPdf
     * @return BaseDocument
     */
    public function setBase64(string $base64): BaseDocument
    {
        $this->base64 = $base64;
        return $this;
    }
}
