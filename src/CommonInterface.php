<?php

namespace Symflex\Library\GeoInterface;

/**
 * Interface CommonInterface
 * @package Symflex\Library\GeoInterface
 */
interface CommonInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return bool
     */
    public function isActive(): bool;
}
