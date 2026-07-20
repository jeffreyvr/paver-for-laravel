<?php

namespace Jeffreyvr\PaverForLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class Paver extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jeffreyvr\Paver\Paver::class;
    }
}
