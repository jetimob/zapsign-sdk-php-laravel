<?php

declare(strict_types=1);

namespace Jetimob\ZapSign\Entity;

use Jetimob\Http\Traits\Serializable;

abstract class BaseDocument
{
    use Serializable;

    /** @var string $name Nome do documento. Máximo 255 caracteres */
    protected string $name;

    /** @var string $url_pdf URL pública do PDF. Máximo 10Mb */
    protected string $url_pdf;

    /** @var string|null $base64_pdf Alternativa ao $url_pdf */
    protected ?string $base64_pdf;

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
    protected ?string $created_at;
    protected ?string $last_update_at;
    protected ?string $token;

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
        return $this->url_pdf;
    }

    /**
     * @param string $url_pdf URL pública do PDF. Máximo 10Mb
     * @return BaseDocument
     */
    public function setUrlPdf(string $url_pdf): BaseDocument
    {
        $this->url_pdf = $url_pdf;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase64Pdf(): string
    {
        return $this->base64_pdf;
    }

    /**
     * @param string $base64_pdf Alternativa ao $url_pdf
     * @return BaseDocument
     */
    public function setBase64Pdf(string $base64_pdf): BaseDocument
    {
        $this->base64_pdf = $base64_pdf;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLang(): ?string
    {
        return $this->lang;
    }

    /**
     * @param string|null $lang Idioma do documento.
     * Enum: "pt-br", "es", "en",
     * @return BaseDocument
     */
    public function setLang(?string $lang): BaseDocument
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDisableSignerEmails(): ?bool
    {
        return $this->disable_signer_emails;
    }

    /**
     * @param bool|null $disable_signer_emails
     * @return BaseDocument
     */
    public function setDisableSignerEmails(?bool $disable_signer_emails): BaseDocument
    {
        $this->disable_signer_emails = $disable_signer_emails;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSignedFileOnlyFinished(): ?bool
    {
        return $this->signed_file_only_finished;
    }

    /**
     * @param bool|null $signed_file_only_finished
     * @return BaseDocument
     */
    public function setSignedFileOnlyFinished(?bool $signed_file_only_finished): BaseDocument
    {
        $this->signed_file_only_finished = $signed_file_only_finished;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBrandLogo(): ?string
    {
        return $this->brand_logo;
    }

    /**
     * @param string|null $brand_logo
     * @return BaseDocument
     */
    public function setBrandLogo(?string $brand_logo): BaseDocument
    {
        $this->brand_logo = $brand_logo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBrandPrimaryColor(): ?string
    {
        return $this->brand_primary_color;
    }

    /**
     * @param string|null $brand_primary_color
     * @return BaseDocument
     */
    public function setBrandPrimaryColor(?string $brand_primary_color): BaseDocument
    {
        $this->brand_primary_color = $brand_primary_color;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return $this->brand_name;
    }

    /**
     * @param string|null $brand_name
     * @return BaseDocument
     */
    public function setBrandName(?string $brand_name): BaseDocument
    {
        $this->brand_name = $brand_name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->external_id;
    }

    /**
     * @param string|null $external_id
     * @return BaseDocument
     */
    public function setExternalId(?string $external_id): BaseDocument
    {
        $this->external_id = $external_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFolderPath(): ?string
    {
        return $this->folder_path;
    }

    /**
     * @param string|null $folder_path
     * @return BaseDocument
     */
    public function setFolderPath(?string $folder_path): BaseDocument
    {
        $this->folder_path = $folder_path;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->created_by;
    }

    /**
     * @param string|null $created_by E-mail do usuário que será definido como criador do documento, para fins de organização interna.
     * @return BaseDocument
     */
    public function setCreatedBy(?string $created_by): BaseDocument
    {
        $this->created_by = $created_by;
        return $this;
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
}
