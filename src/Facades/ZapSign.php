<?php

namespace Jetimob\ZapSign\Facades;

use Illuminate\Support\Facades\Facade;

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
