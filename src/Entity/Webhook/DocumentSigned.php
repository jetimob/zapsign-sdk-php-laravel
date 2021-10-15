<?php

namespace Jetimob\ZapSign\Entity\Webhook;

use Jetimob\ZapSign\Entity\Document;

class DocumentSigned extends Document
{
    protected string $event_type = 'doc_signed';

    protected array $signers_who_signed;

    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->event_type;
    }

    /**
     * @return array
     */
    public function getSignersWhoSigned(): array
    {
        return $this->signers_who_signed;
    }

    /**
     * @param array $signers_who_signed
     * @return DocumentSigned
     */
    public function setSignersWhoSigned(array $signers_who_signed): DocumentSigned
    {
        $this->signers_who_signed = $signers_who_signed;
        return $this;
    }


}
