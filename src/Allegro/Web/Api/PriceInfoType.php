<?php

/**
 * Class Allegro_Web_Api_PriceInfoType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PriceInfoType extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $priceType
     */
    protected $priceType = null;

    /**
     * @var float $priceValue
     */
    protected $priceValue = null;

    /**
     * @param string $priceType
     * @param float  $priceValue
     */
    public function __construct($priceType, $priceValue)
    {
        $this->priceType  = $priceType;
        $this->priceValue = $priceValue;
    }

    /**
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @param string $priceType
     * @return Allegro_Web_Api_PriceInfoType
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceValue()
    {
        return $this->priceValue;
    }

    /**
     * @param float $priceValue
     * @return Allegro_Web_Api_PriceInfoType
     */
    public function setPriceValue($priceValue)
    {
        $this->priceValue = $priceValue;
        return $this;
    }
}
