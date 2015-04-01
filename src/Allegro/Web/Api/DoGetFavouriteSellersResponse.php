<?php

/**
 * Class Allegro_Web_Api_DoGetFavouriteSellersResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetFavouriteSellersResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfFavouritessellersstruct $sFavouriteSellersList
     */
    protected $sFavouriteSellersList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfFavouritessellersstruct $sFavouriteSellersList
     */
    public function __construct($sFavouriteSellersList)
    {
        $this->sFavouriteSellersList = $sFavouriteSellersList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFavouritessellersstruct
     */
    public function getSFavouriteSellersList()
    {
        return $this->sFavouriteSellersList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFavouritessellersstruct $sFavouriteSellersList
     * @return Allegro_Web_Api_DoGetFavouriteSellersResponse
     */
    public function setSFavouriteSellersList($sFavouriteSellersList)
    {
        $this->sFavouriteSellersList = $sFavouriteSellersList;
        return $this;
    }
}
