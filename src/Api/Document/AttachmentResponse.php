<?php

namespace Jetimob\ZapSign\Api\Document;

class AttachmentResponse extends DocumentResponse
{
    protected string $parent_doc_token;

    public function getParentDocToken(): string
    {
        return $this->parent_doc_token;
    }
}
