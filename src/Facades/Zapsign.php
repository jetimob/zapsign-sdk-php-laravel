<?php

namespace Jetimob\Juno\Facades;

use Illuminate\Support\Facades\Facade;

class Zapsign extends Facade
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
