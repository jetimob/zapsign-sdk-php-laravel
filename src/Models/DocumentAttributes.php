<?php

namespace Jetimob\ZapSign\Models;

use Jetimob\ZapSign\Entity\BaseDocument;
use Jetimob\ZapSign\Entity\Signer;

abstract class DocumentAttributes extends BaseDocument
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
     * @return self
     */
    public function setSandbox(?bool $sandbox): self
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
     * @return self
     */
    public function setSigners(?array $signers): self
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
