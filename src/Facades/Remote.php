<?php

namespace Takiwos\Remote\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Takiwos\Remote\Remote
 */
class Remote extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-remote';
    }
}
