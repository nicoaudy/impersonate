<?php

namespace NicoAudy\Impersonate\Facades;

use Illuminate\Support\Facades\Facade;

class Impersonate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'impersonate';
    }
}
