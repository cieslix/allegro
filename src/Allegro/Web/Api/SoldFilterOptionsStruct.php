<?php

/**
 * Class Allegro_Web_Api_SoldFilterOptionsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SoldFilterOptionsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $filterFormat
     */
    protected $filterFormat = null;

    /**
     * @var int $filterFromEnd
     */
    protected $filterFromEnd = null;

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
     * @param int                               $filterFormat
     * @param int                               $filterFromEnd
     * @param int                               $filterAutoListing
     * @param Allegro_Web_Api_FilterPriceStruct $filterPrice
     * @param int                               $filterDurationType
     */
    public function __construct($filterFormat, $filterFromEnd, $filterAutoListing, $filterPrice, $filterDurationType)
    {
        $this->filterFormat       = $filterFormat;
        $this->filterFromEnd      = $filterFromEnd;
        $this->filterAutoListing  = $filterAutoListing;
        $this->filterPrice        = $filterPrice;
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
     * @return Allegro_Web_Api_SoldFilterOptionsStruct
     */
    public function setFilterFormat($filterFormat)
    {
        $this->filterFormat = $filterFormat;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterFromEnd()
    {
        return $this->filterFromEnd;
    }

    /**
     * @param int $filterFromEnd
     * @return Allegro_Web_Api_SoldFilterOptionsStruct
     */
    public function setFilterFromEnd($filterFromEnd)
    {
        $this->filterFromEnd = $filterFromEnd;
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
     * @return Allegro_Web_Api_SoldFilterOptionsStruct
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
     * @return Allegro_Web_Api_SoldFilterOptionsStruct
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
     * @return Allegro_Web_Api_SoldFilterOptionsStruct
     */
    public function setFilterDurationType($filterDurationType)
    {
        $this->filterDurationType = $filterDurationType;
        return $this;
    }
}
