<?php

namespace Laravel\Instamojo;

use Illuminate\Support\Facades\Facade as LaravelFacade;
/**
 * Class Facade
 * @package Laravel\Instamojo
 */

class Facade extends LaravelFacade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return Client::class;
    }
}