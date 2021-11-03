<?php

namespace Jetimob\ZapSign\Api\Document;

use Jetimob\ZapSign\Api\ZapSignResponse;
use Jetimob\ZapSign\Entity\Document;

class DocumentListResponse extends ZapSignResponse
{
    /** @var Document[] $results */
    protected array $results;

    /** @var int $count */
    protected int $count;

    /** @var string|null $next */
    protected ?string $next;

    /** @var string|null $prev */
    protected ?string $prev;

    public function resultsItemType(): string
    {
        return Document::class;
    }

    /**
     *  @return Document[]
     */
    public function getDocuments(): array
    {
        return $this->results ?? [];
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getNext(): ?string
    {
        return $this->next ?? null;
    }

    public function getPrev(): ?string
    {
        return $this->prev ?? null;
    }
}
