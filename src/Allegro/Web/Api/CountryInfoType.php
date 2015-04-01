<?php

/**
 * Class Allegro_Web_Api_CountryInfoType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_CountryInfoType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var string $countryName
     */
    protected $countryName = null;

    /**
     * @param int $countryId
     * @param string $countryName
     */
    public function __construct($countryId, $countryName)
    {
        $this->countryId = $countryId;
        $this->countryName = $countryName;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return Allegro_Web_Api_CountryInfoType
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return Allegro_Web_Api_CountryInfoType
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }
}
