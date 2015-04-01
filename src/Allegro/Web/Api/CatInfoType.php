<?php

/**
 * Class Allegro_Web_Api_CatInfoType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_CatInfoType extends Allegro_Web_Api_Abstract
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
     * @var int $catParent
     */
    protected $catParent = null;

    /**
     * @var int $catPosition
     */
    protected $catPosition = null;

    /**
     * @var int $catIsProductCatalogueEnabled
     */
    protected $catIsProductCatalogueEnabled = null;

    /**
     * @param int $catId
     * @param string $catName
     * @param int $catParent
     * @param int $catPosition
     * @param int $catIsProductCatalogueEnabled
     */
    public function __construct($catId, $catName, $catParent, $catPosition, $catIsProductCatalogueEnabled)
    {
        $this->catId = $catId;
        $this->catName = $catName;
        $this->catParent = $catParent;
        $this->catPosition = $catPosition;
        $this->catIsProductCatalogueEnabled = $catIsProductCatalogueEnabled;
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
     * @return Allegro_Web_Api_CatInfoType
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
     * @return Allegro_Web_Api_CatInfoType
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;
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
     * @return Allegro_Web_Api_CatInfoType
     */
    public function setCatParent($catParent)
    {
        $this->catParent = $catParent;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatPosition()
    {
        return $this->catPosition;
    }

    /**
     * @param int $catPosition
     * @return Allegro_Web_Api_CatInfoType
     */
    public function setCatPosition($catPosition)
    {
        $this->catPosition = $catPosition;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatIsProductCatalogueEnabled()
    {
        return $this->catIsProductCatalogueEnabled;
    }

    /**
     * @param int $catIsProductCatalogueEnabled
     * @return Allegro_Web_Api_CatInfoType
     */
    public function setCatIsProductCatalogueEnabled($catIsProductCatalogueEnabled)
    {
        $this->catIsProductCatalogueEnabled = $catIsProductCatalogueEnabled;
        return $this;
    }
}
