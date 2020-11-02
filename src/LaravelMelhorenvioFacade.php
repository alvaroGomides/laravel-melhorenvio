<?php

namespace AlvaroGomides\LaravelMelhorenvio;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlvaroGomides\LaravelMelhorenvio\Skeleton\SkeletonClass
 */
class LaravelMelhorenvioFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-melhorenvio';
    }
}
