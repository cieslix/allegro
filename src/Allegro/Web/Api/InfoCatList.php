<?php

/**
 * Class Allegro_Web_Api_InfoCatList
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_InfoCatList extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $catId
     */
    protected $catId = null;

    /**
     * @var string $catName
     */
    protected $catName = null;

    /**
     * @var int $catItemsCount
     */
    protected $catItemsCount = null;

    /**
     * @param int $catId
     * @param string $catName
     * @param int $catItemsCount
     */
    public function __construct($catId, $catName, $catItemsCount)
    {
        $this->catId = $catId;
        $this->catName = $catName;
        $this->catItemsCount = $catItemsCount;
    }

    /**
     * @return int
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * @param int $catId
     * @return Allegro_Web_Api_InfoCatList
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCatName()
    {
        return $this->catName;
    }

    /**
     * @param string $catName
     * @return Allegro_Web_Api_InfoCatList
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatItemsCount()
    {
        return $this->catItemsCount;
    }

    /**
     * @param int $catItemsCount
     * @return Allegro_Web_Api_InfoCatList
     */
    public function setCatItemsCount($catItemsCount)
    {
        $this->catItemsCount = $catItemsCount;
        return $this;
    }
}
