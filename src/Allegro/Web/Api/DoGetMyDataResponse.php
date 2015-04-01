<?php

/**
 * Class Allegro_Web_Api_DoGetMyDataResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyDataResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_UserDataStruct $userData
     */
    protected $userData = null;

    /**
     * @var Allegro_Web_Api_InvoiceDataStruct $invoiceData
     */
    protected $invoiceData = null;

    /**
     * @var Allegro_Web_Api_CompanyExtraDataStruct $companyExtraData
     */
    protected $companyExtraData = null;

    /**
     * @var Allegro_Web_Api_CompanySecondAddressStruct $companySecondAddress
     */
    protected $companySecondAddress = null;

    /**
     * @var Allegro_Web_Api_PharmacyDataStruct $pharmacyData
     */
    protected $pharmacyData = null;

    /**
     * @var Allegro_Web_Api_AlcoholDataStruct $alcoholData
     */
    protected $alcoholData = null;

    /**
     * @var Allegro_Web_Api_RelatedPersonsStruct $relatedPersons
     */
    protected $relatedPersons = null;

    /**
     * @param Allegro_Web_Api_UserDataStruct $userData
     * @param Allegro_Web_Api_InvoiceDataStruct $invoiceData
     * @param Allegro_Web_Api_CompanyExtraDataStruct $companyExtraData
     * @param Allegro_Web_Api_CompanySecondAddressStruct $companySecondAddress
     * @param Allegro_Web_Api_PharmacyDataStruct $pharmacyData
     * @param Allegro_Web_Api_AlcoholDataStruct $alcoholData
     * @param Allegro_Web_Api_RelatedPersonsStruct $relatedPersons
     */
    public function __construct($userData, $invoiceData, $companyExtraData, $companySecondAddress, $pharmacyData, $alcoholData, $relatedPersons)
    {
        $this->userData = $userData;
        $this->invoiceData = $invoiceData;
        $this->companyExtraData = $companyExtraData;
        $this->companySecondAddress = $companySecondAddress;
        $this->pharmacyData = $pharmacyData;
        $this->alcoholData = $alcoholData;
        $this->relatedPersons = $relatedPersons;
    }

    /**
     * @return Allegro_Web_Api_UserDataStruct
     */
    public function getUserData()
    {
        return $this->userData;
    }

    /**
     * @param Allegro_Web_Api_UserDataStruct $userData
     * @return Allegro_Web_Api_DoGetMyDataResponse
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_InvoiceDataStruct
     */
    public function getInvoiceData()
    {
        return $this->invoiceData;
    }

    /**
     * @param Allegro_Web_Api_InvoiceDataStruct $invoiceData
     * @return Allegro_Web_Api_DoGetMyDataResponse
     */
    public function setInvoiceData($invoiceData)
    {
        $this->invoiceData = $invoiceData;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_CompanyExtraDataStruct
     */
    public function getCompanyExtraData()
    {
        return $this->companyExtraData;
    }

    /**
     * @param Allegro_Web_Api_CompanyExtraDataStruct $companyExtraData
     * @return Allegro_Web_Api_DoGetMyDataResponse
     */
    public function setCompanyExtraData($companyExtraData)
    {
        $this->companyExtraData = $companyExtraData;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_CompanySecondAddressStruct
     */
    public function getCompanySecondAddress()
    {
        return $this->companySecondAddress;
    }

    /**
     * @param Allegro_Web_Api_CompanySecondAddressStruct $companySecondAddress
     * @return Allegro_Web_Api_DoGetMyDataResponse
     */
    public function setCompanySecondAddress($companySecondAddress)
    {
        $this->companySecondAddress = $companySecondAddress;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PharmacyDataStruct
     */
    public function getPharmacyData()
    {
        return $this->pharmacyData;
    }

    /**
     * @param Allegro_Web_Api_PharmacyDataStruct $pharmacyData
     * @return Allegro_Web_Api_DoGetMyDataResponse
     */
    public function setPharmacyData($pharmacyData)
    {
        $this->pharmacyData = $pharmacyData;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_AlcoholDataStruct
     */
    public function getAlcoholData()
    {
        return $this->alcoholData;
    }

    /**
     * @param Allegro_Web_Api_AlcoholDataStruct $alcoholData
     * @return Allegro_Web_Api_DoGetMyDataResponse
     */
    public function setAlcoholData($alcoholData)
    {
        $this->alcoholData = $alcoholData;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_RelatedPersonsStruct
     */
    public function getRelatedPersons()
    {
        return $this->relatedPersons;
    }

    /**
     * @param Allegro_Web_Api_RelatedPersonsStruct $relatedPersons
     * @return Allegro_Web_Api_DoGetMyDataResponse
     */
    public function setRelatedPersons($relatedPersons)
    {
        $this->relatedPersons = $relatedPersons;
        return $this;
    }
}
