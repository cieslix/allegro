<?php

/**
 * Class Allegro_Web_Api_FilterPriceStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FilterPriceStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var float $filterPriceFrom
     */
    protected $filterPriceFrom = null;

    /**
     * @var float $filterPriceTo
     */
    protected $filterPriceTo = null;

    /**
     * @param float $filterPriceFrom
     * @param float $filterPriceTo
     */
    public function __construct($filterPriceFrom, $filterPriceTo)
    {
        $this->filterPriceFrom = $filterPriceFrom;
        $this->filterPriceTo   = $filterPriceTo;
    }

    /**
     * @return float
     */
    public function getFilterPriceFrom()
    {
        return $this->filterPriceFrom;
    }

    /**
     * @param float $filterPriceFrom
     * @return Allegro_Web_Api_FilterPriceStruct
     */
    public function setFilterPriceFrom($filterPriceFrom)
    {
        $this->filterPriceFrom = $filterPriceFrom;
        return $this;
    }

    /**
     * @return float
     */
    public function getFilterPriceTo()
    {
        return $this->filterPriceTo;
    }

    /**
     * @param float $filterPriceTo
     * @return Allegro_Web_Api_FilterPriceStruct
     */
    public function setFilterPriceTo($filterPriceTo)
    {
        $this->filterPriceTo = $filterPriceTo;
        return $this;
    }
}
