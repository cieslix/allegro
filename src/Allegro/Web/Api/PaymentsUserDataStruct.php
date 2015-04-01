<?php

/**
 * Class Allegro_Web_Api_PaymentsUserDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PaymentsUserDataStruct extends Allegro_Web_Api_Abstract
{
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
     * @var int $userCountry
     */
    protected $userCountry = null;

    /**
     * @var string $userPhone
     */
    protected $userPhone = null;

    /**
     * @param string $userFullName
     * @param string $userAddress
     * @param string $userPostcode
     * @param string $userCity
     * @param int $userCountry
     * @param string $userPhone
     */
    public function __construct($userFullName, $userAddress, $userPostcode, $userCity, $userCountry, $userPhone)
    {
        $this->userFullName = $userFullName;
        $this->userAddress = $userAddress;
        $this->userPostcode = $userPostcode;
        $this->userCity = $userCity;
        $this->userCountry = $userCountry;
        $this->userPhone = $userPhone;
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
     * @return Allegro_Web_Api_PaymentsUserDataStruct
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
     * @return Allegro_Web_Api_PaymentsUserDataStruct
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
     * @return Allegro_Web_Api_PaymentsUserDataStruct
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
     * @return Allegro_Web_Api_PaymentsUserDataStruct
     */
    public function setUserCity($userCity)
    {
        $this->userCity = $userCity;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserCountry()
    {
        return $this->userCountry;
    }

    /**
     * @param int $userCountry
     * @return Allegro_Web_Api_PaymentsUserDataStruct
     */
    public function setUserCountry($userCountry)
    {
        $this->userCountry = $userCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     * @return Allegro_Web_Api_PaymentsUserDataStruct
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;
        return $this;
    }
}
