<?php

/**
 * Class Allegro_Web_Api_DoGetShopCatsDataResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetShopCatsDataResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfCatinfotype $shopCatsList
     */
    protected $shopCatsList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfCatinfotype $shopCatsList
     */
    public function __construct($shopCatsList)
    {
        $this->shopCatsList = $shopCatsList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfCatinfotype
     */
    public function getShopCatsList()
    {
        return $this->shopCatsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfCatinfotype $shopCatsList
     * @return Allegro_Web_Api_DoGetShopCatsDataResponse
     */
    public function setShopCatsList($shopCatsList)
    {
        $this->shopCatsList = $shopCatsList;
        return $this;
    }
}
