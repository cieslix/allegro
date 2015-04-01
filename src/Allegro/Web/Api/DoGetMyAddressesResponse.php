<?php

/**
 * Class Allegro_Web_Api_DoGetMyAddressesResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyAddressesResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfAddressinfostruct $addressesInfo
     */
    protected $addressesInfo = null;

    /**
     * @param Allegro_Web_Api_ArrayOfAddressinfostruct $addressesInfo
     */
    public function __construct($addressesInfo)
    {
        $this->addressesInfo = $addressesInfo;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfAddressinfostruct
     */
    public function getAddressesInfo()
    {
        return $this->addressesInfo;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfAddressinfostruct $addressesInfo
     * @return Allegro_Web_Api_DoGetMyAddressesResponse
     */
    public function setAddressesInfo($addressesInfo)
    {
        $this->addressesInfo = $addressesInfo;
        return $this;
    }
}
