<?php

/**
 * Class Allegro_Web_Api_PostBuyFormAddressStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostBuyFormAddressStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $postBuyFormAdrCountry
     */
    protected $postBuyFormAdrCountry = null;

    /**
     * @var string $postBuyFormAdrStreet
     */
    protected $postBuyFormAdrStreet = null;

    /**
     * @var string $postBuyFormAdrPostcode
     */
    protected $postBuyFormAdrPostcode = null;

    /**
     * @var string $postBuyFormAdrCity
     */
    protected $postBuyFormAdrCity = null;

    /**
     * @var string $postBuyFormAdrFullName
     */
    protected $postBuyFormAdrFullName = null;

    /**
     * @var string $postBuyFormAdrCompany
     */
    protected $postBuyFormAdrCompany = null;

    /**
     * @var string $postBuyFormAdrPhone
     */
    protected $postBuyFormAdrPhone = null;

    /**
     * @var string $postBuyFormAdrNip
     */
    protected $postBuyFormAdrNip = null;

    /**
     * @var string $postBuyFormCreatedDate
     */
    protected $postBuyFormCreatedDate = null;

    /**
     * @var int $postBuyFormAdrType
     */
    protected $postBuyFormAdrType = null;

    /**
     * @param int $postBuyFormAdrCountry
     * @param string $postBuyFormAdrStreet
     * @param string $postBuyFormAdrPostcode
     * @param string $postBuyFormAdrCity
     * @param string $postBuyFormAdrFullName
     * @param string $postBuyFormAdrCompany
     * @param string $postBuyFormAdrPhone
     * @param string $postBuyFormAdrNip
     * @param string $postBuyFormCreatedDate
     * @param int $postBuyFormAdrType
     */
    public function __construct($postBuyFormAdrCountry, $postBuyFormAdrStreet, $postBuyFormAdrPostcode, $postBuyFormAdrCity, $postBuyFormAdrFullName, $postBuyFormAdrCompany, $postBuyFormAdrPhone, $postBuyFormAdrNip, $postBuyFormCreatedDate, $postBuyFormAdrType)
    {
        $this->postBuyFormAdrCountry = $postBuyFormAdrCountry;
        $this->postBuyFormAdrStreet = $postBuyFormAdrStreet;
        $this->postBuyFormAdrPostcode = $postBuyFormAdrPostcode;
        $this->postBuyFormAdrCity = $postBuyFormAdrCity;
        $this->postBuyFormAdrFullName = $postBuyFormAdrFullName;
        $this->postBuyFormAdrCompany = $postBuyFormAdrCompany;
        $this->postBuyFormAdrPhone = $postBuyFormAdrPhone;
        $this->postBuyFormAdrNip = $postBuyFormAdrNip;
        $this->postBuyFormCreatedDate = $postBuyFormCreatedDate;
        $this->postBuyFormAdrType = $postBuyFormAdrType;
    }

    /**
     * @return int
     */
    public function getPostBuyFormAdrCountry()
    {
        return $this->postBuyFormAdrCountry;
    }

    /**
     * @param int $postBuyFormAdrCountry
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrCountry($postBuyFormAdrCountry)
    {
        $this->postBuyFormAdrCountry = $postBuyFormAdrCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrStreet()
    {
        return $this->postBuyFormAdrStreet;
    }

    /**
     * @param string $postBuyFormAdrStreet
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrStreet($postBuyFormAdrStreet)
    {
        $this->postBuyFormAdrStreet = $postBuyFormAdrStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrPostcode()
    {
        return $this->postBuyFormAdrPostcode;
    }

    /**
     * @param string $postBuyFormAdrPostcode
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrPostcode($postBuyFormAdrPostcode)
    {
        $this->postBuyFormAdrPostcode = $postBuyFormAdrPostcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrCity()
    {
        return $this->postBuyFormAdrCity;
    }

    /**
     * @param string $postBuyFormAdrCity
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrCity($postBuyFormAdrCity)
    {
        $this->postBuyFormAdrCity = $postBuyFormAdrCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrFullName()
    {
        return $this->postBuyFormAdrFullName;
    }

    /**
     * @param string $postBuyFormAdrFullName
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrFullName($postBuyFormAdrFullName)
    {
        $this->postBuyFormAdrFullName = $postBuyFormAdrFullName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrCompany()
    {
        return $this->postBuyFormAdrCompany;
    }

    /**
     * @param string $postBuyFormAdrCompany
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrCompany($postBuyFormAdrCompany)
    {
        $this->postBuyFormAdrCompany = $postBuyFormAdrCompany;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrPhone()
    {
        return $this->postBuyFormAdrPhone;
    }

    /**
     * @param string $postBuyFormAdrPhone
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrPhone($postBuyFormAdrPhone)
    {
        $this->postBuyFormAdrPhone = $postBuyFormAdrPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrNip()
    {
        return $this->postBuyFormAdrNip;
    }

    /**
     * @param string $postBuyFormAdrNip
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrNip($postBuyFormAdrNip)
    {
        $this->postBuyFormAdrNip = $postBuyFormAdrNip;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormCreatedDate()
    {
        return $this->postBuyFormCreatedDate;
    }

    /**
     * @param string $postBuyFormCreatedDate
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function setPostBuyFormCreatedDate($postBuyFormCreatedDate)
    {
        $this->postBuyFormCreatedDate = $postBuyFormCreatedDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormAdrType()
    {
        return $this->postBuyFormAdrType;
    }

    /**
     * @param int $postBuyFormAdrType
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrType($postBuyFormAdrType)
    {
        $this->postBuyFormAdrType = $postBuyFormAdrType;
        return $this;
    }
}
