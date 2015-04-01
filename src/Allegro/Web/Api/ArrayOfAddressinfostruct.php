<?php

/**
 * Class Allegro_Web_Api_ArrayOfAddressinfostruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfAddressinfostruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_AddressInfoStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_AddressInfoStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_AddressInfoStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_AddressInfoStruct[] $item
     * @return Allegro_Web_Api_ArrayOfAddressinfostruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
