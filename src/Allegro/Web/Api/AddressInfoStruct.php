<?php

/**
 * Class Allegro_Web_Api_AddressInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_AddressInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $addressType
     */
    protected $addressType = null;

    /**
     * @var Allegro_Web_Api_AddressUserDataStruct $addressUserData
     */
    protected $addressUserData = null;

    /**
     * @param int $addressType
     * @param Allegro_Web_Api_AddressUserDataStruct $addressUserData
     */
    public function __construct($addressType, $addressUserData)
    {
        $this->addressType = $addressType;
        $this->addressUserData = $addressUserData;
    }

    /**
     * @return int
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * @param int $addressType
     * @return Allegro_Web_Api_AddressInfoStruct
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_AddressUserDataStruct
     */
    public function getAddressUserData()
    {
        return $this->addressUserData;
    }

    /**
     * @param Allegro_Web_Api_AddressUserDataStruct $addressUserData
     * @return Allegro_Web_Api_AddressInfoStruct
     */
    public function setAddressUserData($addressUserData)
    {
        $this->addressUserData = $addressUserData;
        return $this;
    }
}
