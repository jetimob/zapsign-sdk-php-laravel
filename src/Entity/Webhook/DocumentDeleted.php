<?php

declare(strict_types=1);

namespace Jetimob\ZapSign\Entity\Webhook;

use Jetimob\ZapSign\Entity\Document;

class DocumentDeleted extends Document
{
    protected string $event_type = 'doc_deleted';

    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->event_type;
    }
}
