<?php

/**
 * Class Allegro_Web_Api_FiltersListType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FiltersListType extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $filterId
     */
    protected $filterId = null;

    /**
     * @var string $filterName
     */
    protected $filterName = null;

    /**
     * @var string $filterType
     */
    protected $filterType = null;

    /**
     * @var string $filterControlType
     */
    protected $filterControlType = null;

    /**
     * @var string $filterDataType
     */
    protected $filterDataType = null;

    /**
     * @var boolean $filterIsRange
     */
    protected $filterIsRange = null;

    /**
     * @var int $filterArraySize
     */
    protected $filterArraySize = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFiltervaluetype $filterValues
     */
    protected $filterValues = null;

    /**
     * @var Allegro_Web_Api_FilterRelationType $filterRelations
     */
    protected $filterRelations = null;

    /**
     * @param string                                 $filterId
     * @param string                                 $filterName
     * @param string                                 $filterType
     * @param string                                 $filterControlType
     * @param string                                 $filterDataType
     * @param boolean                                $filterIsRange
     * @param int                                    $filterArraySize
     * @param Allegro_Web_Api_ArrayOfFiltervaluetype $filterValues
     * @param Allegro_Web_Api_FilterRelationType     $filterRelations
     */
    public function __construct($filterId, $filterName, $filterType, $filterControlType, $filterDataType, $filterIsRange, $filterArraySize, $filterValues, $filterRelations)
    {
        $this->filterId          = $filterId;
        $this->filterName        = $filterName;
        $this->filterType        = $filterType;
        $this->filterControlType = $filterControlType;
        $this->filterDataType    = $filterDataType;
        $this->filterIsRange     = $filterIsRange;
        $this->filterArraySize   = $filterArraySize;
        $this->filterValues      = $filterValues;
        $this->filterRelations   = $filterRelations;
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
     * @return Allegro_Web_Api_FiltersListType
     */
    public function setFilterId($filterId)
    {
        $this->filterId = $filterId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilterName()
    {
        return $this->filterName;
    }

    /**
     * @param string $filterName
     * @return Allegro_Web_Api_FiltersListType
     */
    public function setFilterName($filterName)
    {
        $this->filterName = $filterName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilterType()
    {
        return $this->filterType;
    }

    /**
     * @param string $filterType
     * @return Allegro_Web_Api_FiltersListType
     */
    public function setFilterType($filterType)
    {
        $this->filterType = $filterType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilterControlType()
    {
        return $this->filterControlType;
    }

    /**
     * @param string $filterControlType
     * @return Allegro_Web_Api_FiltersListType
     */
    public function setFilterControlType($filterControlType)
    {
        $this->filterControlType = $filterControlType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilterDataType()
    {
        return $this->filterDataType;
    }

    /**
     * @param string $filterDataType
     * @return Allegro_Web_Api_FiltersListType
     */
    public function setFilterDataType($filterDataType)
    {
        $this->filterDataType = $filterDataType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getFilterIsRange()
    {
        return $this->filterIsRange;
    }

    /**
     * @param boolean $filterIsRange
     * @return Allegro_Web_Api_FiltersListType
     */
    public function setFilterIsRange($filterIsRange)
    {
        $this->filterIsRange = $filterIsRange;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterArraySize()
    {
        return $this->filterArraySize;
    }

    /**
     * @param int $filterArraySize
     * @return Allegro_Web_Api_FiltersListType
     */
    public function setFilterArraySize($filterArraySize)
    {
        $this->filterArraySize = $filterArraySize;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFiltervaluetype
     */
    public function getFilterValues()
    {
        return $this->filterValues;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFiltervaluetype $filterValues
     * @return Allegro_Web_Api_FiltersListType
     */
    public function setFilterValues($filterValues)
    {
        $this->filterValues = $filterValues;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_FilterRelationType
     */
    public function getFilterRelations()
    {
        return $this->filterRelations;
    }

    /**
     * @param Allegro_Web_Api_FilterRelationType $filterRelations
     * @return Allegro_Web_Api_FiltersListType
     */
    public function setFilterRelations($filterRelations)
    {
        $this->filterRelations = $filterRelations;
        return $this;
    }
}
