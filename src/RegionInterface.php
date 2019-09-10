<?php

namespace Symflex\Library\GeoInterface;

/**
 * Interface RegionInterface
 * @package Symflex\Library\GeoInterface
 */
interface RegionInterface extends CommonInterface
{
    /**
     * @return object
     */
    public function getCities(): object;

    /**
     * @return object
     */
    public function getCountry(): object;

    /**
     * @return object
     */
    public function getProvices(): object;
}
