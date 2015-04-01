<?php

/**
 * Class Allegro_Web_Api_DoShowCatResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoShowCatResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfInfocatlist $catParentArray
     */
    protected $catParentArray = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInfocatlist $catChildArray
     */
    protected $catChildArray = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInfocatlist $catSisterArray
     */
    protected $catSisterArray = null;

    /**
     * @var int $catItemsCount
     */
    protected $catItemsCount = null;

    /**
     * @var int $catItemsCountFeatured
     */
    protected $catItemsCountFeatured = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSearchresponsetype $catItemsArray
     */
    protected $catItemsArray = null;

    /**
     * @param Allegro_Web_Api_ArrayOfInfocatlist $catParentArray
     * @param Allegro_Web_Api_ArrayOfInfocatlist $catChildArray
     * @param Allegro_Web_Api_ArrayOfInfocatlist $catSisterArray
     * @param int $catItemsCount
     * @param int $catItemsCountFeatured
     * @param Allegro_Web_Api_ArrayOfSearchresponsetype $catItemsArray
     */
    public function __construct($catParentArray, $catChildArray, $catSisterArray, $catItemsCount, $catItemsCountFeatured, $catItemsArray)
    {
        $this->catParentArray = $catParentArray;
        $this->catChildArray = $catChildArray;
        $this->catSisterArray = $catSisterArray;
        $this->catItemsCount = $catItemsCount;
        $this->catItemsCountFeatured = $catItemsCountFeatured;
        $this->catItemsArray = $catItemsArray;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfInfocatlist
     */
    public function getCatParentArray()
    {
        return $this->catParentArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfInfocatlist $catParentArray
     * @return Allegro_Web_Api_DoShowCatResponse
     */
    public function setCatParentArray($catParentArray)
    {
        $this->catParentArray = $catParentArray;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfInfocatlist
     */
    public function getCatChildArray()
    {
        return $this->catChildArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfInfocatlist $catChildArray
     * @return Allegro_Web_Api_DoShowCatResponse
     */
    public function setCatChildArray($catChildArray)
    {
        $this->catChildArray = $catChildArray;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfInfocatlist
     */
    public function getCatSisterArray()
    {
        return $this->catSisterArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfInfocatlist $catSisterArray
     * @return Allegro_Web_Api_DoShowCatResponse
     */
    public function setCatSisterArray($catSisterArray)
    {
        $this->catSisterArray = $catSisterArray;
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
     * @return Allegro_Web_Api_DoShowCatResponse
     */
    public function setCatItemsCount($catItemsCount)
    {
        $this->catItemsCount = $catItemsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatItemsCountFeatured()
    {
        return $this->catItemsCountFeatured;
    }

    /**
     * @param int $catItemsCountFeatured
     * @return Allegro_Web_Api_DoShowCatResponse
     */
    public function setCatItemsCountFeatured($catItemsCountFeatured)
    {
        $this->catItemsCountFeatured = $catItemsCountFeatured;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSearchresponsetype
     */
    public function getCatItemsArray()
    {
        return $this->catItemsArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSearchresponsetype $catItemsArray
     * @return Allegro_Web_Api_DoShowCatResponse
     */
    public function setCatItemsArray($catItemsArray)
    {
        $this->catItemsArray = $catItemsArray;
        return $this;
    }
}
