<?php

/**
 * Class Allegro_Web_Api_SortOptionsType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SortOptionsType extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sortType
     */
    protected $sortType = null;

    /**
     * @var string $sortOrder
     */
    protected $sortOrder = null;

    /**
     * @param string $sortType
     * @param string $sortOrder
     */
    public function __construct($sortType, $sortOrder)
    {
        $this->sortType = $sortType;
        $this->sortOrder = $sortOrder;
    }

    /**
     * @return string
     */
    public function getSortType()
    {
        return $this->sortType;
    }

    /**
     * @param string $sortType
     * @return Allegro_Web_Api_SortOptionsType
     */
    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     * @return Allegro_Web_Api_SortOptionsType
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
}
