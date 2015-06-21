<?php

/**
 * Class Allegro_Web_Api_UserPostBuyDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_UserPostBuyDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_UserDataStruct $userData
     */
    protected $userData = null;

    /**
     * @var Allegro_Web_Api_UserSentToDataStruct $userSentToData
     */
    protected $userSentToData = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $userBankAccounts
     */
    protected $userBankAccounts = null;

    /**
     * @var Allegro_Web_Api_CompanySecondAddressStruct $companySecondAddress
     */
    protected $companySecondAddress = null;

    /**
     * @param Allegro_Web_Api_UserDataStruct             $userData
     * @param Allegro_Web_Api_UserSentToDataStruct       $userSentToData
     * @param Allegro_Web_Api_ArrayOfString              $userBankAccounts
     * @param Allegro_Web_Api_CompanySecondAddressStruct $companySecondAddress
     */
    public function __construct($userData, $userSentToData, $userBankAccounts, $companySecondAddress)
    {
        $this->userData             = $userData;
        $this->userSentToData       = $userSentToData;
        $this->userBankAccounts     = $userBankAccounts;
        $this->companySecondAddress = $companySecondAddress;
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
     * @return Allegro_Web_Api_UserPostBuyDataStruct
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_UserSentToDataStruct
     */
    public function getUserSentToData()
    {
        return $this->userSentToData;
    }

    /**
     * @param Allegro_Web_Api_UserSentToDataStruct $userSentToData
     * @return Allegro_Web_Api_UserPostBuyDataStruct
     */
    public function setUserSentToData($userSentToData)
    {
        $this->userSentToData = $userSentToData;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getUserBankAccounts()
    {
        return $this->userBankAccounts;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $userBankAccounts
     * @return Allegro_Web_Api_UserPostBuyDataStruct
     */
    public function setUserBankAccounts($userBankAccounts)
    {
        $this->userBankAccounts = $userBankAccounts;
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
     * @return Allegro_Web_Api_UserPostBuyDataStruct
     */
    public function setCompanySecondAddress($companySecondAddress)
    {
        $this->companySecondAddress = $companySecondAddress;
        return $this;
    }
}
