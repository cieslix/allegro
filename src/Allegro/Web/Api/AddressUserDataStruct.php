<?php

/**
 * Class Allegro_Web_Api_AddressUserDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_AddressUserDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $userCompany
     */
    protected $userCompany = null;

    /**
     * @var string $userFullName
     */
    protected $userFullName = null;

    /**
     * @var string $userAddress
     */
    protected $userAddress = null;

    /**
     * @var string $userPostcode
     */
    protected $userPostcode = null;

    /**
     * @var string $userCity
     */
    protected $userCity = null;

    /**
     * @param string $userCompany
     * @param string $userFullName
     * @param string $userAddress
     * @param string $userPostcode
     * @param string $userCity
     */
    public function __construct($userCompany, $userFullName, $userAddress, $userPostcode, $userCity)
    {
        $this->userCompany = $userCompany;
        $this->userFullName = $userFullName;
        $this->userAddress = $userAddress;
        $this->userPostcode = $userPostcode;
        $this->userCity = $userCity;
    }

    /**
     * @return string
     */
    public function getUserCompany()
    {
        return $this->userCompany;
    }

    /**
     * @param string $userCompany
     * @return Allegro_Web_Api_AddressUserDataStruct
     */
    public function setUserCompany($userCompany)
    {
        $this->userCompany = $userCompany;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserFullName()
    {
        return $this->userFullName;
    }

    /**
     * @param string $userFullName
     * @return Allegro_Web_Api_AddressUserDataStruct
     */
    public function setUserFullName($userFullName)
    {
        $this->userFullName = $userFullName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * @param string $userAddress
     * @return Allegro_Web_Api_AddressUserDataStruct
     */
    public function setUserAddress($userAddress)
    {
        $this->userAddress = $userAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserPostcode()
    {
        return $this->userPostcode;
    }

    /**
     * @param string $userPostcode
     * @return Allegro_Web_Api_AddressUserDataStruct
     */
    public function setUserPostcode($userPostcode)
    {
        $this->userPostcode = $userPostcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserCity()
    {
        return $this->userCity;
    }

    /**
     * @param string $userCity
     * @return Allegro_Web_Api_AddressUserDataStruct
     */
    public function setUserCity($userCity)
    {
        $this->userCity = $userCity;
        return $this;
    }
}
