<?php

namespace Ht3aa\OtpIq\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ht3aa\OtpIq\OtpIq
 */
class OtpIq extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ht3aa\OtpIq\OtpIq::class;
    }
}
