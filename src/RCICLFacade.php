<?php

namespace DmACKGL\RCICL;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DmACKGL\RCICL\Skeleton\SkeletonClass
 */
class RCICLFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rcicl';
    }
}
