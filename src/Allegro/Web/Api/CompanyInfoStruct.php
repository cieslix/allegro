<?php

/**
 * Class Allegro_Web_Api_CompanyInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_CompanyInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $companyFirstName
     */
    protected $companyFirstName = null;

    /**
     * @var string $companyLastName
     */
    protected $companyLastName = null;

    /**
     * @var string $companyName
     */
    protected $companyName = null;

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
     * @var string $companyNip
     */
    protected $companyNip = null;

    /**
     * @param string $companyFirstName
     * @param string $companyLastName
     * @param string $companyName
     * @param string $companyAddress
     * @param string $companyPostcode
     * @param string $companyCity
     * @param string $companyNip
     */
    public function __construct($companyFirstName, $companyLastName, $companyName, $companyAddress, $companyPostcode, $companyCity, $companyNip)
    {
        $this->companyFirstName = $companyFirstName;
        $this->companyLastName = $companyLastName;
        $this->companyName = $companyName;
        $this->companyAddress = $companyAddress;
        $this->companyPostcode = $companyPostcode;
        $this->companyCity = $companyCity;
        $this->companyNip = $companyNip;
    }

    /**
     * @return string
     */
    public function getCompanyFirstName()
    {
        return $this->companyFirstName;
    }

    /**
     * @param string $companyFirstName
     * @return Allegro_Web_Api_CompanyInfoStruct
     */
    public function setCompanyFirstName($companyFirstName)
    {
        $this->companyFirstName = $companyFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyLastName()
    {
        return $this->companyLastName;
    }

    /**
     * @param string $companyLastName
     * @return Allegro_Web_Api_CompanyInfoStruct
     */
    public function setCompanyLastName($companyLastName)
    {
        $this->companyLastName = $companyLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Allegro_Web_Api_CompanyInfoStruct
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
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
     * @return Allegro_Web_Api_CompanyInfoStruct
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
     * @return Allegro_Web_Api_CompanyInfoStruct
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
     * @return Allegro_Web_Api_CompanyInfoStruct
     */
    public function setCompanyCity($companyCity)
    {
        $this->companyCity = $companyCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyNip()
    {
        return $this->companyNip;
    }

    /**
     * @param string $companyNip
     * @return Allegro_Web_Api_CompanyInfoStruct
     */
    public function setCompanyNip($companyNip)
    {
        $this->companyNip = $companyNip;
        return $this;
    }
}
