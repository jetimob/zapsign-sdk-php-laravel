<?php

namespace Jetimob\ZapSign\Models;

use Jetimob\ZapSign\Entity\BaseDocument;

abstract class AttachmentAttributes extends BaseDocument
{
    /**
     * @param string $name Nome do documento. Máximo 255 caracteres
     * @param string $urlPdf URL pública do PDF. Máximo 10Mb
     * @return static
     */
    public static function new(string $name, string $urlPdf): self
    {
        return (new static())
            ->setName($name)
            ->setUrlPdf($urlPdf);
    }
}
