<?php

namespace Jetimob\ZapSign\Api\Document;

use Jetimob\ZapSign\Api\EmbeddedResponse;
use Jetimob\ZapSign\Entity\Document;

class DocumentListResponse extends EmbeddedResponse
{
    /** @var Document[] */
    protected array $documents;

    public function documentsItemType(): string
    {
        return Document::class;
    }

    /**
     *  @return Document[]
     */
    public function getDocuments(): array
    {
        return $this->documents ?? [];
    }
}
