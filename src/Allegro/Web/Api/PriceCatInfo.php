<?php

/**
 * Class Allegro_Web_Api_PriceCatInfo
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PriceCatInfo extends Allegro_Web_Api_Abstract
{
    /**
     * @var float $priceMin
     */
    protected $priceMin = null;

    /**
     * @var float $priceMax
     */
    protected $priceMax = null;

    /**
     * @param float $priceMin
     * @param float $priceMax
     */
    public function __construct($priceMin, $priceMax)
    {
        $this->priceMin = $priceMin;
        $this->priceMax = $priceMax;
    }

    /**
     * @return float
     */
    public function getPriceMin()
    {
        return $this->priceMin;
    }

    /**
     * @param float $priceMin
     * @return Allegro_Web_Api_PriceCatInfo
     */
    public function setPriceMin($priceMin)
    {
        $this->priceMin = $priceMin;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceMax()
    {
        return $this->priceMax;
    }

    /**
     * @param float $priceMax
     * @return Allegro_Web_Api_PriceCatInfo
     */
    public function setPriceMax($priceMax)
    {
        $this->priceMax = $priceMax;
        return $this;
    }
}
