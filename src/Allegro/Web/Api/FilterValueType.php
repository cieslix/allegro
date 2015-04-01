<?php

/**
 * Class Allegro_Web_Api_FilterValueType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FilterValueType extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $filterValueId
     */
    protected $filterValueId = null;

    /**
     * @var string $filterValueName
     */
    protected $filterValueName = null;

    /**
     * @var int $filterValueCount
     */
    protected $filterValueCount = null;

    /**
     * @param string $filterValueId
     * @param string $filterValueName
     * @param int $filterValueCount
     */
    public function __construct($filterValueId, $filterValueName, $filterValueCount)
    {
        $this->filterValueId = $filterValueId;
        $this->filterValueName = $filterValueName;
        $this->filterValueCount = $filterValueCount;
    }

    /**
     * @return string
     */
    public function getFilterValueId()
    {
        return $this->filterValueId;
    }

    /**
     * @param string $filterValueId
     * @return Allegro_Web_Api_FilterValueType
     */
    public function setFilterValueId($filterValueId)
    {
        $this->filterValueId = $filterValueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilterValueName()
    {
        return $this->filterValueName;
    }

    /**
     * @param string $filterValueName
     * @return Allegro_Web_Api_FilterValueType
     */
    public function setFilterValueName($filterValueName)
    {
        $this->filterValueName = $filterValueName;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterValueCount()
    {
        return $this->filterValueCount;
    }

    /**
     * @param int $filterValueCount
     * @return Allegro_Web_Api_FilterValueType
     */
    public function setFilterValueCount($filterValueCount)
    {
        $this->filterValueCount = $filterValueCount;
        return $this;
    }
}
