<?php

/**
 * Class Allegro_Web_Api_DoGetFavouriteCategoriesResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetFavouriteCategoriesResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfFavouritescategoriesstruct $sFavouriteCategoriesList
     */
    protected $sFavouriteCategoriesList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfFavouritescategoriesstruct $sFavouriteCategoriesList
     */
    public function __construct($sFavouriteCategoriesList)
    {
        $this->sFavouriteCategoriesList = $sFavouriteCategoriesList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFavouritescategoriesstruct
     */
    public function getSFavouriteCategoriesList()
    {
        return $this->sFavouriteCategoriesList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFavouritescategoriesstruct $sFavouriteCategoriesList
     * @return Allegro_Web_Api_DoGetFavouriteCategoriesResponse
     */
    public function setSFavouriteCategoriesList($sFavouriteCategoriesList)
    {
        $this->sFavouriteCategoriesList = $sFavouriteCategoriesList;
        return $this;
    }
}
