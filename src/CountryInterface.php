<?php

namespace Symflex\Library\GeoInterface;

/**
 * Interface CountryInterface
 * @package Symflex\Library\GeoInterface
 */
interface CountryInterface extends CommonInterface
{
    /**
     * @return object
     */
    public function getCities(): object;

    /**
     * @return object
     */
    public function getRegions(): object;

    /**
     * @return object
     */
    public function getProvinces(): object;
}
