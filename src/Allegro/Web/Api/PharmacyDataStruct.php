<?php

/**
 * Class Allegro_Web_Api_PharmacyDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PharmacyDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $pharmacyOpeningDate
     */
    protected $pharmacyOpeningDate = null;

    /**
     * @var string $pharmacyExpirationDate
     */
    protected $pharmacyExpirationDate = null;

    /**
     * @var string $pharmacyName
     */
    protected $pharmacyName = null;

    /**
     * @var string $pharmacyPharmacistFullName
     */
    protected $pharmacyPharmacistFullName = null;

    /**
     * @var string $pharmacyAddress
     */
    protected $pharmacyAddress = null;

    /**
     * @var string $pharmacyPostcode
     */
    protected $pharmacyPostcode = null;

    /**
     * @var string $pharmacyCity
     */
    protected $pharmacyCity = null;

    /**
     * @var string $pharmacyCommune
     */
    protected $pharmacyCommune = null;

    /**
     * @var int $pharmacyCountryId
     */
    protected $pharmacyCountryId = null;

    /**
     * @var int $pharmacyStateId
     */
    protected $pharmacyStateId = null;

    /**
     * @var string $pharmacyPermitNumber
     */
    protected $pharmacyPermitNumber = null;

    /**
     * @var string $pharmacyPermitInfo
     */
    protected $pharmacyPermitInfo = null;

    /**
     * @param string $pharmacyOpeningDate
     * @param string $pharmacyExpirationDate
     * @param string $pharmacyName
     * @param string $pharmacyPharmacistFullName
     * @param string $pharmacyAddress
     * @param string $pharmacyPostcode
     * @param string $pharmacyCity
     * @param string $pharmacyCommune
     * @param int    $pharmacyCountryId
     * @param int    $pharmacyStateId
     * @param string $pharmacyPermitNumber
     * @param string $pharmacyPermitInfo
     */
    public function __construct($pharmacyOpeningDate, $pharmacyExpirationDate, $pharmacyName, $pharmacyPharmacistFullName, $pharmacyAddress, $pharmacyPostcode, $pharmacyCity, $pharmacyCommune, $pharmacyCountryId, $pharmacyStateId, $pharmacyPermitNumber, $pharmacyPermitInfo)
    {
        $this->pharmacyOpeningDate        = $pharmacyOpeningDate;
        $this->pharmacyExpirationDate     = $pharmacyExpirationDate;
        $this->pharmacyName               = $pharmacyName;
        $this->pharmacyPharmacistFullName = $pharmacyPharmacistFullName;
        $this->pharmacyAddress            = $pharmacyAddress;
        $this->pharmacyPostcode           = $pharmacyPostcode;
        $this->pharmacyCity               = $pharmacyCity;
        $this->pharmacyCommune            = $pharmacyCommune;
        $this->pharmacyCountryId          = $pharmacyCountryId;
        $this->pharmacyStateId            = $pharmacyStateId;
        $this->pharmacyPermitNumber       = $pharmacyPermitNumber;
        $this->pharmacyPermitInfo         = $pharmacyPermitInfo;
    }

    /**
     * @return string
     */
    public function getPharmacyOpeningDate()
    {
        return $this->pharmacyOpeningDate;
    }

    /**
     * @param string $pharmacyOpeningDate
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyOpeningDate($pharmacyOpeningDate)
    {
        $this->pharmacyOpeningDate = $pharmacyOpeningDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyExpirationDate()
    {
        return $this->pharmacyExpirationDate;
    }

    /**
     * @param string $pharmacyExpirationDate
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyExpirationDate($pharmacyExpirationDate)
    {
        $this->pharmacyExpirationDate = $pharmacyExpirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyName()
    {
        return $this->pharmacyName;
    }

    /**
     * @param string $pharmacyName
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyName($pharmacyName)
    {
        $this->pharmacyName = $pharmacyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyPharmacistFullName()
    {
        return $this->pharmacyPharmacistFullName;
    }

    /**
     * @param string $pharmacyPharmacistFullName
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyPharmacistFullName($pharmacyPharmacistFullName)
    {
        $this->pharmacyPharmacistFullName = $pharmacyPharmacistFullName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyAddress()
    {
        return $this->pharmacyAddress;
    }

    /**
     * @param string $pharmacyAddress
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyAddress($pharmacyAddress)
    {
        $this->pharmacyAddress = $pharmacyAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyPostcode()
    {
        return $this->pharmacyPostcode;
    }

    /**
     * @param string $pharmacyPostcode
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyPostcode($pharmacyPostcode)
    {
        $this->pharmacyPostcode = $pharmacyPostcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyCity()
    {
        return $this->pharmacyCity;
    }

    /**
     * @param string $pharmacyCity
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyCity($pharmacyCity)
    {
        $this->pharmacyCity = $pharmacyCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyCommune()
    {
        return $this->pharmacyCommune;
    }

    /**
     * @param string $pharmacyCommune
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyCommune($pharmacyCommune)
    {
        $this->pharmacyCommune = $pharmacyCommune;
        return $this;
    }

    /**
     * @return int
     */
    public function getPharmacyCountryId()
    {
        return $this->pharmacyCountryId;
    }

    /**
     * @param int $pharmacyCountryId
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyCountryId($pharmacyCountryId)
    {
        $this->pharmacyCountryId = $pharmacyCountryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPharmacyStateId()
    {
        return $this->pharmacyStateId;
    }

    /**
     * @param int $pharmacyStateId
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyStateId($pharmacyStateId)
    {
        $this->pharmacyStateId = $pharmacyStateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyPermitNumber()
    {
        return $this->pharmacyPermitNumber;
    }

    /**
     * @param string $pharmacyPermitNumber
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyPermitNumber($pharmacyPermitNumber)
    {
        $this->pharmacyPermitNumber = $pharmacyPermitNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyPermitInfo()
    {
        return $this->pharmacyPermitInfo;
    }

    /**
     * @param string $pharmacyPermitInfo
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function setPharmacyPermitInfo($pharmacyPermitInfo)
    {
        $this->pharmacyPermitInfo = $pharmacyPermitInfo;
        return $this;
    }
}
