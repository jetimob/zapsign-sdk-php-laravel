<?php

declare(strict_types=1);

namespace Jetimob\ZapSign\Api\Signer;

use Jetimob\ZapSign\Api\ZapSignResponse;

class SignerResponse extends ZapSignResponse
{
    /** @var string|null $redirect_link Link para redirecionamento após signatário assinar. */
    protected ?string $redirect_link;

    /** @var string|null $name Nome completo do signatário */
    protected ?string $name;

    /** @var string|null $email E-mail do signatário */
    protected ?string $email;

    /** @var string|null $phone_country Código do país do telefone do signatário (Ex: Brasil é 55) */
    protected ?string $phone_country;

    /** @var string|null $phone_number Telefone (com DDD) do signatário (Ex: 11989118800) */
    protected ?string $phone_number;

    /**
     * @var string|null $auth_mode Você pode escolher o método de autenticação do signatário.
     * Enum: "assinaturaTela", "tokenEmail", "assinaturaTela-tokenEmail", "tokenSms", "assinaturaTela-tokenSms", "certificadoDigital"
     */
    protected ?string $auth_mode;

    /** @var bool|null $lock_name Bloquear alteração do nome pelo signatário. */
    protected ?bool $lock_name;

    /** @var bool|null $lock_email Bloquear alteração do e-mail pelo signatário. */
    protected ?bool $lock_email;

    /** @var bool|null $lock_phone Bloquear alteração do telefone pelo signatário. */
    protected ?bool $lock_phone;

    /** @var string|null $qualification Qualificação para aparecer no relatório de assinaturas. Ex: valor "testemunha" irá resultar em "Assinou como testemunha" */
    protected ?string $qualification;

    /** @var string|null $external_id ID externo do signatário na sua aplicação. */
    protected ?string $external_id;

    protected ?string $status;
    protected ?int $times_viewed;
    protected ?string $last_view_at;
    protected ?string $signed_at;
    protected ?string $geo_latitude;
    protected ?string $geo_longitude;
    protected ?string $token;
    protected ?bool $send_automatic_email;
    protected ?string $custom_message;

    /**
     * @return string|null
     */
    public function getRedirectLink(): ?string
    {
        return $this->redirect_link;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getPhoneCountry(): ?string
    {
        return $this->phone_country;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    /**
     * @return string|null
     */
    public function getAuthMode(): ?string
    {
        return $this->auth_mode;
    }

    /**
     * @return bool|null
     */
    public function getLockName(): ?bool
    {
        return $this->lock_name;
    }

    /**
     * @return bool|null
     */
    public function getLockEmail(): ?bool
    {
        return $this->lock_email;
    }

    /**
     * @return bool|null
     */
    public function getLockPhone(): ?bool
    {
        return $this->lock_phone;
    }

    /**
     * @return string|null
     */
    public function getQualification(): ?string
    {
        return $this->qualification;
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
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return int|null
     */
    public function getTimesViewed(): ?int
    {
        return $this->times_viewed;
    }

    /**
     * @return string|null
     */
    public function getLastViewAt(): ?string
    {
        return $this->last_view_at;
    }

    /**
     * @return string|null
     */
    public function getSignedAt(): ?string
    {
        return $this->signed_at;
    }

    /**
     * @return string|null
     */
    public function getGeoLatitude(): ?string
    {
        return $this->geo_latitude;
    }

    /**
     * @return string|null
     */
    public function getGeoLongitude(): ?string
    {
        return $this->geo_longitude;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    public function getSignerUrl(): ?string
    {
        return "https://app.zapsign.com.br/verificar/{$this->getToken()}";
    }

    public function getSendAutomaticEmail(): ?bool
    {
        return $this->send_automatic_email;
    }
    public function getCustomMessage(): ?string
    {
        return $this->custom_message;
    }
}
