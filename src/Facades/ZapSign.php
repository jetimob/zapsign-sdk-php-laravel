<?php

declare(strict_types=1);

namespace Jetimob\ZapSign\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Jetimob\ZapSign\Api\Document\DocumentApi document()
 * @method static \Jetimob\ZapSign\Api\Signer\SignerApi signer()
 */
class ZapSign extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jetimob.zapsign';
    }
}
