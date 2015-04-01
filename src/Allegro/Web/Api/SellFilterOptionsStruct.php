<?php

/**
 * Class Allegro_Web_Api_SellFilterOptionsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellFilterOptionsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $filterFormat
     */
    protected $filterFormat = null;

    /**
     * @var int $filterBids
     */
    protected $filterBids = null;

    /**
     * @var int $filterToEnd
     */
    protected $filterToEnd = null;

    /**
     * @var int $filterFromStart
     */
    protected $filterFromStart = null;

    /**
     * @var int $filterAutoListing
     */
    protected $filterAutoListing = null;

    /**
     * @var Allegro_Web_Api_FilterPriceStruct $filterPrice
     */
    protected $filterPrice = null;

    /**
     * @var int $filterDurationType
     */
    protected $filterDurationType = null;

    /**
     * @param int $filterFormat
     * @param int $filterBids
     * @param int $filterToEnd
     * @param int $filterFromStart
     * @param int $filterAutoListing
     * @param Allegro_Web_Api_FilterPriceStruct $filterPrice
     * @param int $filterDurationType
     */
    public function __construct($filterFormat, $filterBids, $filterToEnd, $filterFromStart, $filterAutoListing, $filterPrice, $filterDurationType)
    {
        $this->filterFormat = $filterFormat;
        $this->filterBids = $filterBids;
        $this->filterToEnd = $filterToEnd;
        $this->filterFromStart = $filterFromStart;
        $this->filterAutoListing = $filterAutoListing;
        $this->filterPrice = $filterPrice;
        $this->filterDurationType = $filterDurationType;
    }

    /**
     * @return int
     */
    public function getFilterFormat()
    {
        return $this->filterFormat;
    }

    /**
     * @param int $filterFormat
     * @return Allegro_Web_Api_SellFilterOptionsStruct
     */
    public function setFilterFormat($filterFormat)
    {
        $this->filterFormat = $filterFormat;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterBids()
    {
        return $this->filterBids;
    }

    /**
     * @param int $filterBids
     * @return Allegro_Web_Api_SellFilterOptionsStruct
     */
    public function setFilterBids($filterBids)
    {
        $this->filterBids = $filterBids;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterToEnd()
    {
        return $this->filterToEnd;
    }

    /**
     * @param int $filterToEnd
     * @return Allegro_Web_Api_SellFilterOptionsStruct
     */
    public function setFilterToEnd($filterToEnd)
    {
        $this->filterToEnd = $filterToEnd;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterFromStart()
    {
        return $this->filterFromStart;
    }

    /**
     * @param int $filterFromStart
     * @return Allegro_Web_Api_SellFilterOptionsStruct
     */
    public function setFilterFromStart($filterFromStart)
    {
        $this->filterFromStart = $filterFromStart;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterAutoListing()
    {
        return $this->filterAutoListing;
    }

    /**
     * @param int $filterAutoListing
     * @return Allegro_Web_Api_SellFilterOptionsStruct
     */
    public function setFilterAutoListing($filterAutoListing)
    {
        $this->filterAutoListing = $filterAutoListing;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_FilterPriceStruct
     */
    public function getFilterPrice()
    {
        return $this->filterPrice;
    }

    /**
     * @param Allegro_Web_Api_FilterPriceStruct $filterPrice
     * @return Allegro_Web_Api_SellFilterOptionsStruct
     */
    public function setFilterPrice($filterPrice)
    {
        $this->filterPrice = $filterPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterDurationType()
    {
        return $this->filterDurationType;
    }

    /**
     * @param int $filterDurationType
     * @return Allegro_Web_Api_SellFilterOptionsStruct
     */
    public function setFilterDurationType($filterDurationType)
    {
        $this->filterDurationType = $filterDurationType;
        return $this;
    }
}
