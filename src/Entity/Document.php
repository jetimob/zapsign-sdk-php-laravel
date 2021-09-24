<?php

namespace Jetimob\Zapsign\Entity;

class Document extends BaseDocument
{
    /** @var bool|null $sandbox Defina como true caso se trate de um documento de teste */
    protected ?bool $sandbox;

    /** @var Signer[]|null $signers Representa os signatários do documento */
    protected ?array $signers;

    /**
     * @return bool|null
     */
    public function getSandbox(): ?bool
    {
        return $this->sandbox;
    }

    /**
     * @param bool|null $sandbox Defina como true caso se trate de um documento de teste
     * @return Document
     */
    public function setSandbox(?bool $sandbox): Document
    {
        $this->sandbox = $sandbox;
        return $this;
    }

    /**
     * @return Signer[]|null
     */
    public function getSigners(): ?array
    {
        return $this->signers;
    }

    /**
     * @param Signer[]|null $signers Representa os signatários do documento
     * @return Document
     */
    public function setSigners(?array $signers): Document
    {
        $this->signers = $signers;
        return $this;
    }

    /**
     * @param string $name Nome do documento. Máximo 255 caracteres
     * @param string $urlPdf URL pública do PDF. Máximo 10Mb
     * @param Signer[] $signers Representa os signatários do documento
     * @return static
     */
    public static function new(string $name, string $urlPdf, array $signers): self
    {
        return (new static())
            ->setName($name)
            ->setUrlPdf($urlPdf)
            ->setSigners($signers);
    }
}
