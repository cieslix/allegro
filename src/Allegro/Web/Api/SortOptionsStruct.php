<?php

/**
 * Class Allegro_Web_Api_SortOptionsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SortOptionsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sortType
     */
    protected $sortType = null;

    /**
     * @var int $sortOrder
     */
    protected $sortOrder = null;

    /**
     * @param int $sortType
     * @param int $sortOrder
     */
    public function __construct($sortType, $sortOrder)
    {
        $this->sortType  = $sortType;
        $this->sortOrder = $sortOrder;
    }

    /**
     * @return int
     */
    public function getSortType()
    {
        return $this->sortType;
    }

    /**
     * @param int $sortType
     * @return Allegro_Web_Api_SortOptionsStruct
     */
    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param int $sortOrder
     * @return Allegro_Web_Api_SortOptionsStruct
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
}
