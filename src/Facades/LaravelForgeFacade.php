<?php

namespace TheMrTech\LaravelForgeFacade\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelForgeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravelForge';
    }
}
