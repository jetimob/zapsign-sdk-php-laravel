<?php

declare(strict_types=1);

namespace Jetimob\ZapSign\Api\Document;

use Jetimob\ZapSign\Api\ZapSignResponse;
use Jetimob\ZapSign\Entity\Document;
use Jetimob\ZapSign\Entity\Signer;

class DocumentResponse extends ZapSignResponse
{
    /** @var string $name Nome do documento. Máximo 255 caracteres */
    protected string $name;

    /** @var string $url_pdf URL pública do PDF. Máximo 10Mb */
    protected string $url_pdf;

    /** @var string|null $base_64 Alternativa ao $url_pdf */
    protected ?string $base_64;

    /**
     * @var string|null Idioma do documento.
     * Enum: "pt-br", "es", "en",
     */
    protected ?string $lang;

    protected ?bool $disable_signer_emails;

    protected ?bool $signed_file_only_finished;

    protected ?string $brand_logo;

    protected ?string $brand_primary_color;

    protected ?string $brand_name;

    protected ?string $external_id;

    protected ?string $folder_path;

    /** @var string|null E-mail do usuário que será definido como criador do documento, para fins de organização interna. */
    protected ?string $created_by;

    protected ?int $open_id;
    protected ?string $status;
    protected ?string $signed_file;
    protected ?array $extra_docs;
    protected ?string $created_through;
    protected ?bool $deleted;
    protected ?string $deleted_at;
    protected ?string $created_at;
    protected ?string $last_update_at;
    protected ?string $token;

    /** @var bool|null $sandbox Defina como true caso se trate de um documento de teste */
    protected ?bool $sandbox;

    /** @var Signer[]|null $signers Representa os signatários do documento */
    protected ?array $signers;


    public function signersItemType(): string
    {
        return Signer::class;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrlPdf(): string
    {
        return $this->url_pdf;
    }

    /**
     * @return string|null
     */
    public function getBase64(): ?string
    {
        return $this->base_64;
    }

    /**
     * @return string|null
     */
    public function getLang(): ?string
    {
        return $this->lang;
    }

    /**
     * @return bool|null
     */
    public function getDisableSignerEmails(): ?bool
    {
        return $this->disable_signer_emails;
    }

    /**
     * @return bool|null
     */
    public function getSignedFileOnlyFinished(): ?bool
    {
        return $this->signed_file_only_finished;
    }

    /**
     * @return string|null
     */
    public function getBrandLogo(): ?string
    {
        return $this->brand_logo;
    }

    /**
     * @return string|null
     */
    public function getBrandPrimaryColor(): ?string
    {
        return $this->brand_primary_color;
    }

    /**
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return $this->brand_name;
    }

    /**
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->external_id;
    }

    /**
     * @return string|null
     */
    public function getFolderPath(): ?string
    {
        return $this->folder_path;
    }

    /**
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->created_by;
    }

    /**
     * @return int|null
     */
    public function getOpenId(): ?int
    {
        return $this->open_id;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getSignedFile(): ?string
    {
        return $this->signed_file;
    }

    /**
     * @return array|null
     */
    public function getExtraDocs(): ?array
    {
        return $this->extra_docs;
    }

    /**
     * @return string|null
     */
    public function getCreatedThrough(): ?string
    {
        return $this->created_through;
    }

    /**
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    /**
     * @return string|null
     */
    public function getLastUpdateAt(): ?string
    {
        return $this->last_update_at;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @return bool|null
     */
    public function getSandbox(): ?bool
    {
        return $this->sandbox;
    }

    /**
     * @return Signer[]|null
     */
    public function getSigners(): ?array
    {
        return $this->signers;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deleted_at;
    }
}
