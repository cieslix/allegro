<?php

/**
 * Class Allegro_Web_Api_DoGetShopsTagsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetShopsTagsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $shopsTagsCount
     */
    protected $shopsTagsCount = null;

    /**
     * @var Allegro_Web_Api_ArrayOfShopstagtypestruct $shopsTags
     */
    protected $shopsTags = null;

    /**
     * @param int $shopsTagsCount
     * @param Allegro_Web_Api_ArrayOfShopstagtypestruct $shopsTags
     */
    public function __construct($shopsTagsCount, $shopsTags)
    {
        $this->shopsTagsCount = $shopsTagsCount;
        $this->shopsTags = $shopsTags;
    }

    /**
     * @return int
     */
    public function getShopsTagsCount()
    {
        return $this->shopsTagsCount;
    }

    /**
     * @param int $shopsTagsCount
     * @return Allegro_Web_Api_DoGetShopsTagsResponse
     */
    public function setShopsTagsCount($shopsTagsCount)
    {
        $this->shopsTagsCount = $shopsTagsCount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfShopstagtypestruct
     */
    public function getShopsTags()
    {
        return $this->shopsTags;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfShopstagtypestruct $shopsTags
     * @return Allegro_Web_Api_DoGetShopsTagsResponse
     */
    public function setShopsTags($shopsTags)
    {
        $this->shopsTags = $shopsTags;
        return $this;
    }
}
