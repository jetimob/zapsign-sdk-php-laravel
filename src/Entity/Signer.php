<?php

namespace Jetimob\Zapsign\Entity;

use Jetimob\Http\Traits\Serializable;

class Signer
{
    use Serializable;

    /** @var string|null $redirectLink Link para redirecionamento após signatário assinar. */
    protected ?string $redirectLink;

    /** @var string|null $name Nome completo do signatário */
    protected ?string $name;

    /** @var string|null $email E-mail do signatário */
    protected ?string $email;

    /** @var string|null $phoneCountry Código do país do telefone do signatário (Ex: Brasil é 55) */
    protected ?string $phoneCountry;

    /** @var string|null $phoneNumber Telefone (com DDD) do signatário (Ex: 11989118800) */
    protected ?string $phoneNumber;

    /**
     * @var string|null $authMode Você pode escolher o método de autenticação do signatário.
     * Enum: "assinaturaTela", "tokenEmail", "assinaturaTela-tokenEmail", "tokenSms", "assinaturaTela-tokenSms", "certificadoDigital"
     */
    protected ?string $authMode;

    /** @var bool|null $lockName Bloquear alteração do nome pelo signatário. */
    protected ?bool $lockName;

    /** @var bool|null $lockEmail Bloquear alteração do e-mail pelo signatário. */
    protected ?bool $lockEmail;

    /** @var bool|null $lockPhone Bloquear alteração do telefone pelo signatário. */
    protected ?bool $lockPhone;

    /** @var string|null $qualification Qualificação para aparecer no relatório de assinaturas. Ex: valor "testemunha" irá resultar em "Assinou como testemunha" */
    protected ?string $qualification;

    /** @var string|null $externalId ID externo do signatário na sua aplicação. */
    protected ?string $externalId;

    /**
     * @return string|null
     */
    public function getRedirectLink(): ?string
    {
        return $this->redirectLink;
    }

    /**
     * @param string|null $redirectLink Link para redirecionamento após signatário assinar.
     * @return Signer
     */
    public function setRedirectLink(?string $redirectLink): Signer
    {
        $this->redirectLink = $redirectLink;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name Nome completo do signatário
     * @return Signer
     */
    public function setName(?string $name): Signer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email E-mail do signatário
     * @return Signer
     */
    public function setEmail(?string $email): Signer
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneCountry(): ?string
    {
        return $this->phoneCountry;
    }

    /**
     * @param string|null $phoneCountry Código do país do telefone do signatário (Ex: Brasil é 55)
     * @return Signer
     */
    public function setPhoneCountry(?string $phoneCountry): Signer
    {
        $this->phoneCountry = $phoneCountry;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber Telefone (com DDD) do signatário (Ex: 11989118800)
     * @return Signer
     */
    public function setPhoneNumber(?string $phoneNumber): Signer
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthMode(): ?string
    {
        return $this->authMode;
    }

    /**
     * @param string|null $authMode Você pode escolher o método de autenticação do signatário.
     * Enum: "assinaturaTela", "tokenEmail", "assinaturaTela-tokenEmail", "tokenSms", "assinaturaTela-tokenSms", "certificadoDigital"
     * @return Signer
     */
    public function setAuthMode(?string $authMode): Signer
    {
        $this->authMode = $authMode;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLockName(): ?bool
    {
        return $this->lockName;
    }

    /**
     * @param bool|null $lockName Bloquear alteração do nome pelo signatário.
     * @return Signer
     */
    public function setLockName(?bool $lockName): Signer
    {
        $this->lockName = $lockName;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLockEmail(): ?bool
    {
        return $this->lockEmail;
    }

    /**
     * @param bool|null $lockEmail Bloquear alteração do e-mail pelo signatário.
     * @return Signer
     */
    public function setLockEmail(?bool $lockEmail): Signer
    {
        $this->lockEmail = $lockEmail;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLockPhone(): ?bool
    {
        return $this->lockPhone;
    }

    /**
     * @param bool|null $lockPhone Bloquear alteração do telefone pelo signatário.
     * @return Signer
     */
    public function setLockPhone(?bool $lockPhone): Signer
    {
        $this->lockPhone = $lockPhone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQualification(): ?string
    {
        return $this->qualification;
    }

    /**
     * @param string|null $qualification Qualificação para aparecer no relatório de assinaturas. Ex: valor "testemunha" irá resultar em "Assinou como testemunha"
     * @return Signer
     */
    public function setQualification(?string $qualification): Signer
    {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * @param string|null $externalId ID externo do signatário na sua aplicação.
     * @return Signer
     */
    public function setExternalId(?string $externalId): Signer
    {
        $this->externalId = $externalId;
        return $this;
    }



}
