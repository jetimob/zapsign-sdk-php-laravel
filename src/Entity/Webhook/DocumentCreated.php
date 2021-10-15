<?php

namespace Jetimob\ZapSign\Entity\Webhook;

use Jetimob\ZapSign\Entity\Document;

class DocumentCreated extends Document
{
    protected string $event_type = 'doc_created';

    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->event_type;
    }
}
