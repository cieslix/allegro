<?php

/**
 * Class Allegro_Web_Api_DoGetCountriesResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetCountriesResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfCountryinfotype $countryArray
     */
    protected $countryArray = null;

    /**
     * @param Allegro_Web_Api_ArrayOfCountryinfotype $countryArray
     */
    public function __construct($countryArray)
    {
        $this->countryArray = $countryArray;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfCountryinfotype
     */
    public function getCountryArray()
    {
        return $this->countryArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfCountryinfotype $countryArray
     * @return Allegro_Web_Api_DoGetCountriesResponse
     */
    public function setCountryArray($countryArray)
    {
        $this->countryArray = $countryArray;
        return $this;
    }
}
