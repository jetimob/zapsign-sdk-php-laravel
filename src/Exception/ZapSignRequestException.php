<?php

namespace Jetimob\ZapSign\Exception;

use GuzzleHttp\Exception\RequestException;
use Jetimob\Http\Contracts\HydratableContract;
use Jetimob\Http\Traits\Serializable;

// Precisa ver se vai ter como padronizar os erros em entities
class ZapSignRequestException extends RequestException implements ZapSignException, HydratableContract
{
    use Serializable;

    protected ?string $timestamp = null;
    protected ?int $status = null;
    protected ?string $error = null;
    protected ?string $path = null;
    protected ?array $details = null;

    public function detailsItemType(): string
    {
        return ErrorDetail::class;
    }

    /**
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error ?? $this->getMessage();
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @return ErrorDetail[]
     */
    public function getDetails(): array
    {
        return $this->details ?? [];
    }

    public function hasDetails(): bool
    {
        return !is_null($this->details);
    }
}
