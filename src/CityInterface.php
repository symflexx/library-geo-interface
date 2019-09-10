<?php

namespace Symflex\Library\GeoInterface;

/**
 * Interface CityInterface
 * @package Symflex\Library\GeoInterface
 */
interface CityInterface extends CommonInterface
{
    /**
     * @return object
     */
    public function getCountry(): object;

    /**
     * @return object
     */
    public function getRegion(): object;

    /**
     * @return object
     */
    public function getProvince(): object;
}
