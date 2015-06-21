<?php

/**
 * Class Allegro_Web_Api_ItemCatList
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemCatList extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $catLevel
     */
    protected $catLevel = null;

    /**
     * @var int $catId
     */
    protected $catId = null;

    /**
     * @var string $catName
     */
    protected $catName = null;

    /**
     * @param int    $catLevel
     * @param int    $catId
     * @param string $catName
     */
    public function __construct($catLevel, $catId, $catName)
    {
        $this->catLevel = $catLevel;
        $this->catId    = $catId;
        $this->catName  = $catName;
    }

    /**
     * @return int
     */
    public function getCatLevel()
    {
        return $this->catLevel;
    }

    /**
     * @param int $catLevel
     * @return Allegro_Web_Api_ItemCatList
     */
    public function setCatLevel($catLevel)
    {
        $this->catLevel = $catLevel;
        return $this;
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
     * @return Allegro_Web_Api_ItemCatList
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
     * @return Allegro_Web_Api_ItemCatList
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;
        return $this;
    }
}
