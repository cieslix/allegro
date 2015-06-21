<?php

/**
 * Class Allegro_Web_Api_CompanySecondAddressStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_CompanySecondAddressStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $companyWorkerFirstName
     */
    protected $companyWorkerFirstName = null;

    /**
     * @var string $companyWorkerLastName
     */
    protected $companyWorkerLastName = null;

    /**
     * @var string $companyAddress
     */
    protected $companyAddress = null;

    /**
     * @var string $companyPostcode
     */
    protected $companyPostcode = null;

    /**
     * @var string $companyCity
     */
    protected $companyCity = null;

    /**
     * @var int $companyCountryId
     */
    protected $companyCountryId = null;

    /**
     * @var int $companyStateId
     */
    protected $companyStateId = null;

    /**
     * @param string $companyWorkerFirstName
     * @param string $companyWorkerLastName
     * @param string $companyAddress
     * @param string $companyPostcode
     * @param string $companyCity
     * @param int    $companyCountryId
     * @param int    $companyStateId
     */
    public function __construct($companyWorkerFirstName, $companyWorkerLastName, $companyAddress, $companyPostcode, $companyCity, $companyCountryId, $companyStateId)
    {
        $this->companyWorkerFirstName = $companyWorkerFirstName;
        $this->companyWorkerLastName  = $companyWorkerLastName;
        $this->companyAddress         = $companyAddress;
        $this->companyPostcode        = $companyPostcode;
        $this->companyCity            = $companyCity;
        $this->companyCountryId       = $companyCountryId;
        $this->companyStateId         = $companyStateId;
    }

    /**
     * @return string
     */
    public function getCompanyWorkerFirstName()
    {
        return $this->companyWorkerFirstName;
    }

    /**
     * @param string $companyWorkerFirstName
     * @return Allegro_Web_Api_CompanySecondAddressStruct
     */
    public function setCompanyWorkerFirstName($companyWorkerFirstName)
    {
        $this->companyWorkerFirstName = $companyWorkerFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyWorkerLastName()
    {
        return $this->companyWorkerLastName;
    }

    /**
     * @param string $companyWorkerLastName
     * @return Allegro_Web_Api_CompanySecondAddressStruct
     */
    public function setCompanyWorkerLastName($companyWorkerLastName)
    {
        $this->companyWorkerLastName = $companyWorkerLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    /**
     * @param string $companyAddress
     * @return Allegro_Web_Api_CompanySecondAddressStruct
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->companyAddress = $companyAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyPostcode()
    {
        return $this->companyPostcode;
    }

    /**
     * @param string $companyPostcode
     * @return Allegro_Web_Api_CompanySecondAddressStruct
     */
    public function setCompanyPostcode($companyPostcode)
    {
        $this->companyPostcode = $companyPostcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyCity()
    {
        return $this->companyCity;
    }

    /**
     * @param string $companyCity
     * @return Allegro_Web_Api_CompanySecondAddressStruct
     */
    public function setCompanyCity($companyCity)
    {
        $this->companyCity = $companyCity;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyCountryId()
    {
        return $this->companyCountryId;
    }

    /**
     * @param int $companyCountryId
     * @return Allegro_Web_Api_CompanySecondAddressStruct
     */
    public function setCompanyCountryId($companyCountryId)
    {
        $this->companyCountryId = $companyCountryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyStateId()
    {
        return $this->companyStateId;
    }

    /**
     * @param int $companyStateId
     * @return Allegro_Web_Api_CompanySecondAddressStruct
     */
    public function setCompanyStateId($companyStateId)
    {
        $this->companyStateId = $companyStateId;
        return $this;
    }
}
