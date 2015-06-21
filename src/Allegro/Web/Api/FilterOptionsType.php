<?php

/**
 * Class Allegro_Web_Api_FilterOptionsType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FilterOptionsType extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $filterId
     */
    protected $filterId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $filterValueId
     */
    protected $filterValueId = null;

    /**
     * @var Allegro_Web_Api_RangeValueType $filterValueRange
     */
    protected $filterValueRange = null;

    /**
     * @param string                         $filterId
     * @param Allegro_Web_Api_ArrayOfString  $filterValueId
     * @param Allegro_Web_Api_RangeValueType $filterValueRange
     */
    public function __construct($filterId, $filterValueId, $filterValueRange)
    {
        $this->filterId         = $filterId;
        $this->filterValueId    = $filterValueId;
        $this->filterValueRange = $filterValueRange;
    }

    /**
     * @return string
     */
    public function getFilterId()
    {
        return $this->filterId;
    }

    /**
     * @param string $filterId
     * @return Allegro_Web_Api_FilterOptionsType
     */
    public function setFilterId($filterId)
    {
        $this->filterId = $filterId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getFilterValueId()
    {
        return $this->filterValueId;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $filterValueId
     * @return Allegro_Web_Api_FilterOptionsType
     */
    public function setFilterValueId($filterValueId)
    {
        $this->filterValueId = $filterValueId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_RangeValueType
     */
    public function getFilterValueRange()
    {
        return $this->filterValueRange;
    }

    /**
     * @param Allegro_Web_Api_RangeValueType $filterValueRange
     * @return Allegro_Web_Api_FilterOptionsType
     */
    public function setFilterValueRange($filterValueRange)
    {
        $this->filterValueRange = $filterValueRange;
        return $this;
    }
}
