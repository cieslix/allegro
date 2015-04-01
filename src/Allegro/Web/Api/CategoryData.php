<?php

/**
 * Class Allegro_Web_Api_CategoryData
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_CategoryData extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $catId
     */
    protected $catId = null;

    /**
     * @var int $catParent
     */
    protected $catParent = null;

    /**
     * @var int $catCountry
     */
    protected $catCountry = null;

    /**
     * @var int $catLevel
     */
    protected $catLevel = null;

    /**
     * @var int $catIsLeaf
     */
    protected $catIsLeaf = null;

    /**
     * @var string $catName
     */
    protected $catName = null;

    /**
     * @var int $catOptions
     */
    protected $catOptions = null;

    /**
     * @param int $catId
     * @param int $catParent
     * @param int $catCountry
     * @param int $catLevel
     * @param int $catIsLeaf
     * @param string $catName
     * @param int $catOptions
     */
    public function __construct($catId, $catParent, $catCountry, $catLevel, $catIsLeaf, $catName, $catOptions)
    {
        $this->catId = $catId;
        $this->catParent = $catParent;
        $this->catCountry = $catCountry;
        $this->catLevel = $catLevel;
        $this->catIsLeaf = $catIsLeaf;
        $this->catName = $catName;
        $this->catOptions = $catOptions;
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
     * @return Allegro_Web_Api_CategoryData
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatParent()
    {
        return $this->catParent;
    }

    /**
     * @param int $catParent
     * @return Allegro_Web_Api_CategoryData
     */
    public function setCatParent($catParent)
    {
        $this->catParent = $catParent;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatCountry()
    {
        return $this->catCountry;
    }

    /**
     * @param int $catCountry
     * @return Allegro_Web_Api_CategoryData
     */
    public function setCatCountry($catCountry)
    {
        $this->catCountry = $catCountry;
        return $this;
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
     * @return Allegro_Web_Api_CategoryData
     */
    public function setCatLevel($catLevel)
    {
        $this->catLevel = $catLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatIsLeaf()
    {
        return $this->catIsLeaf;
    }

    /**
     * @param int $catIsLeaf
     * @return Allegro_Web_Api_CategoryData
     */
    public function setCatIsLeaf($catIsLeaf)
    {
        $this->catIsLeaf = $catIsLeaf;
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
     * @return Allegro_Web_Api_CategoryData
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatOptions()
    {
        return $this->catOptions;
    }

    /**
     * @param int $catOptions
     * @return Allegro_Web_Api_CategoryData
     */
    public function setCatOptions($catOptions)
    {
        $this->catOptions = $catOptions;
        return $this;
    }
}
