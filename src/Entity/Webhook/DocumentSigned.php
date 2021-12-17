<?php

declare(strict_types=1);

namespace Jetimob\ZapSign\Entity\Webhook;

use Jetimob\Http\Traits\Serializable;
use Jetimob\ZapSign\Entity\Document;
use Jetimob\ZapSign\Entity\Signer;

class DocumentSigned extends Document
{
    protected string $event_type = 'doc_signed';

    protected Signer $signer_who_signed;

    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->event_type;
    }

    /**
     * @return Signer
     */
    public function getSignerWhoSigned(): Signer
    {
        return $this->signer_who_signed;
    }
}
