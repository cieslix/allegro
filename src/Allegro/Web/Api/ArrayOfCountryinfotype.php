<?php

/**
 * Class Allegro_Web_Api_ArrayOfCountryinfotype
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfCountryinfotype extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_CountryInfoType[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_CountryInfoType[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_CountryInfoType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_CountryInfoType[] $item
     * @return Allegro_Web_Api_ArrayOfCountryinfotype
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
