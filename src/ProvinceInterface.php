<?php

namespace Symflex\Library\GeoInterface;

/**
 * Interface ProvinceInterface
 * @package Symflex\Library\GeoInterface
 */
interface ProvinceInterface extends CommonInterface
{
    /**
     * @return object
     */
    public function getRegion(): object;

    /**
     * @return object
     */
    public function getCountry(): object;

    /**
     * @return object
     */
    public function getCities(): object;
}
