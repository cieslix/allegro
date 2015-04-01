<?php

/**
 * Class Allegro_Web_Api_PostBuyFormDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostBuyFormDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $postBuyFormId
     */
    protected $postBuyFormId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPostbuyformitemstruct $postBuyFormItems
     */
    protected $postBuyFormItems = null;

    /**
     * @var int $postBuyFormBuyerId
     */
    protected $postBuyFormBuyerId = null;

    /**
     * @var float $postBuyFormAmount
     */
    protected $postBuyFormAmount = null;

    /**
     * @var float $postBuyFormPostageAmount
     */
    protected $postBuyFormPostageAmount = null;

    /**
     * @var int $postBuyFormInvoiceOption
     */
    protected $postBuyFormInvoiceOption = null;

    /**
     * @var string $postBuyFormMsgToSeller
     */
    protected $postBuyFormMsgToSeller = null;

    /**
     * @var Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormInvoiceData
     */
    protected $postBuyFormInvoiceData = null;

    /**
     * @var Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormShipmentAddress
     */
    protected $postBuyFormShipmentAddress = null;

    /**
     * @var string $postBuyFormPayType
     */
    protected $postBuyFormPayType = null;

    /**
     * @var int $postBuyFormPayId
     */
    protected $postBuyFormPayId = null;

    /**
     * @var string $postBuyFormPayStatus
     */
    protected $postBuyFormPayStatus = null;

    /**
     * @var string $postBuyFormDateInit
     */
    protected $postBuyFormDateInit = null;

    /**
     * @var string $postBuyFormDateRecv
     */
    protected $postBuyFormDateRecv = null;

    /**
     * @var string $postBuyFormDateCancel
     */
    protected $postBuyFormDateCancel = null;

    /**
     * @var int $postBuyFormShipmentId
     */
    protected $postBuyFormShipmentId = null;

    /**
     * @var Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormGdAddress
     */
    protected $postBuyFormGdAddress = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPostbuyformshipmenttrackingstruct $postBuyFormShipmentTracking
     */
    protected $postBuyFormShipmentTracking = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $postBuyFormSurchargesList
     */
    protected $postBuyFormSurchargesList = null;

    /**
     * @var string $postBuyFormGdAdditionalInfo
     */
    protected $postBuyFormGdAdditionalInfo = null;

    /**
     * @var float $postBuyFormPaymentAmount
     */
    protected $postBuyFormPaymentAmount = null;

    /**
     * @var int $postBuyFormSentBySeller
     */
    protected $postBuyFormSentBySeller = null;

    /**
     * @var string $postBuyFormBuyerLogin
     */
    protected $postBuyFormBuyerLogin = null;

    /**
     * @var string $postBuyFormBuyerEmail
     */
    protected $postBuyFormBuyerEmail = null;

    /**
     * @param int $postBuyFormId
     * @param Allegro_Web_Api_ArrayOfPostbuyformitemstruct $postBuyFormItems
     * @param int $postBuyFormBuyerId
     * @param float $postBuyFormAmount
     * @param float $postBuyFormPostageAmount
     * @param int $postBuyFormInvoiceOption
     * @param string $postBuyFormMsgToSeller
     * @param Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormInvoiceData
     * @param Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormShipmentAddress
     * @param string $postBuyFormPayType
     * @param int $postBuyFormPayId
     * @param string $postBuyFormPayStatus
     * @param string $postBuyFormDateInit
     * @param string $postBuyFormDateRecv
     * @param string $postBuyFormDateCancel
     * @param int $postBuyFormShipmentId
     * @param Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormGdAddress
     * @param Allegro_Web_Api_ArrayOfPostbuyformshipmenttrackingstruct $postBuyFormShipmentTracking
     * @param Allegro_Web_Api_ArrayOfLong $postBuyFormSurchargesList
     * @param string $postBuyFormGdAdditionalInfo
     * @param float $postBuyFormPaymentAmount
     * @param int $postBuyFormSentBySeller
     * @param string $postBuyFormBuyerLogin
     * @param string $postBuyFormBuyerEmail
     */
    public function __construct($postBuyFormId, $postBuyFormItems, $postBuyFormBuyerId, $postBuyFormAmount, $postBuyFormPostageAmount, $postBuyFormInvoiceOption, $postBuyFormMsgToSeller, $postBuyFormInvoiceData, $postBuyFormShipmentAddress, $postBuyFormPayType, $postBuyFormPayId, $postBuyFormPayStatus, $postBuyFormDateInit, $postBuyFormDateRecv, $postBuyFormDateCancel, $postBuyFormShipmentId, $postBuyFormGdAddress, $postBuyFormShipmentTracking, $postBuyFormSurchargesList, $postBuyFormGdAdditionalInfo, $postBuyFormPaymentAmount, $postBuyFormSentBySeller, $postBuyFormBuyerLogin, $postBuyFormBuyerEmail)
    {
        $this->postBuyFormId = $postBuyFormId;
        $this->postBuyFormItems = $postBuyFormItems;
        $this->postBuyFormBuyerId = $postBuyFormBuyerId;
        $this->postBuyFormAmount = $postBuyFormAmount;
        $this->postBuyFormPostageAmount = $postBuyFormPostageAmount;
        $this->postBuyFormInvoiceOption = $postBuyFormInvoiceOption;
        $this->postBuyFormMsgToSeller = $postBuyFormMsgToSeller;
        $this->postBuyFormInvoiceData = $postBuyFormInvoiceData;
        $this->postBuyFormShipmentAddress = $postBuyFormShipmentAddress;
        $this->postBuyFormPayType = $postBuyFormPayType;
        $this->postBuyFormPayId = $postBuyFormPayId;
        $this->postBuyFormPayStatus = $postBuyFormPayStatus;
        $this->postBuyFormDateInit = $postBuyFormDateInit;
        $this->postBuyFormDateRecv = $postBuyFormDateRecv;
        $this->postBuyFormDateCancel = $postBuyFormDateCancel;
        $this->postBuyFormShipmentId = $postBuyFormShipmentId;
        $this->postBuyFormGdAddress = $postBuyFormGdAddress;
        $this->postBuyFormShipmentTracking = $postBuyFormShipmentTracking;
        $this->postBuyFormSurchargesList = $postBuyFormSurchargesList;
        $this->postBuyFormGdAdditionalInfo = $postBuyFormGdAdditionalInfo;
        $this->postBuyFormPaymentAmount = $postBuyFormPaymentAmount;
        $this->postBuyFormSentBySeller = $postBuyFormSentBySeller;
        $this->postBuyFormBuyerLogin = $postBuyFormBuyerLogin;
        $this->postBuyFormBuyerEmail = $postBuyFormBuyerEmail;
    }

    /**
     * @return int
     */
    public function getPostBuyFormId()
    {
        return $this->postBuyFormId;
    }

    /**
     * @param int $postBuyFormId
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormId($postBuyFormId)
    {
        $this->postBuyFormId = $postBuyFormId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPostbuyformitemstruct
     */
    public function getPostBuyFormItems()
    {
        return $this->postBuyFormItems;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyformitemstruct $postBuyFormItems
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormItems($postBuyFormItems)
    {
        $this->postBuyFormItems = $postBuyFormItems;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormBuyerId()
    {
        return $this->postBuyFormBuyerId;
    }

    /**
     * @param int $postBuyFormBuyerId
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormBuyerId($postBuyFormBuyerId)
    {
        $this->postBuyFormBuyerId = $postBuyFormBuyerId;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormAmount()
    {
        return $this->postBuyFormAmount;
    }

    /**
     * @param float $postBuyFormAmount
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormAmount($postBuyFormAmount)
    {
        $this->postBuyFormAmount = $postBuyFormAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormPostageAmount()
    {
        return $this->postBuyFormPostageAmount;
    }

    /**
     * @param float $postBuyFormPostageAmount
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormPostageAmount($postBuyFormPostageAmount)
    {
        $this->postBuyFormPostageAmount = $postBuyFormPostageAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormInvoiceOption()
    {
        return $this->postBuyFormInvoiceOption;
    }

    /**
     * @param int $postBuyFormInvoiceOption
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormInvoiceOption($postBuyFormInvoiceOption)
    {
        $this->postBuyFormInvoiceOption = $postBuyFormInvoiceOption;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormMsgToSeller()
    {
        return $this->postBuyFormMsgToSeller;
    }

    /**
     * @param string $postBuyFormMsgToSeller
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormMsgToSeller($postBuyFormMsgToSeller)
    {
        $this->postBuyFormMsgToSeller = $postBuyFormMsgToSeller;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function getPostBuyFormInvoiceData()
    {
        return $this->postBuyFormInvoiceData;
    }

    /**
     * @param Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormInvoiceData
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormInvoiceData($postBuyFormInvoiceData)
    {
        $this->postBuyFormInvoiceData = $postBuyFormInvoiceData;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function getPostBuyFormShipmentAddress()
    {
        return $this->postBuyFormShipmentAddress;
    }

    /**
     * @param Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormShipmentAddress
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormShipmentAddress($postBuyFormShipmentAddress)
    {
        $this->postBuyFormShipmentAddress = $postBuyFormShipmentAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPayType()
    {
        return $this->postBuyFormPayType;
    }

    /**
     * @param string $postBuyFormPayType
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormPayType($postBuyFormPayType)
    {
        $this->postBuyFormPayType = $postBuyFormPayType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormPayId()
    {
        return $this->postBuyFormPayId;
    }

    /**
     * @param int $postBuyFormPayId
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormPayId($postBuyFormPayId)
    {
        $this->postBuyFormPayId = $postBuyFormPayId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPayStatus()
    {
        return $this->postBuyFormPayStatus;
    }

    /**
     * @param string $postBuyFormPayStatus
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormPayStatus($postBuyFormPayStatus)
    {
        $this->postBuyFormPayStatus = $postBuyFormPayStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormDateInit()
    {
        return $this->postBuyFormDateInit;
    }

    /**
     * @param string $postBuyFormDateInit
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormDateInit($postBuyFormDateInit)
    {
        $this->postBuyFormDateInit = $postBuyFormDateInit;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormDateRecv()
    {
        return $this->postBuyFormDateRecv;
    }

    /**
     * @param string $postBuyFormDateRecv
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormDateRecv($postBuyFormDateRecv)
    {
        $this->postBuyFormDateRecv = $postBuyFormDateRecv;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormDateCancel()
    {
        return $this->postBuyFormDateCancel;
    }

    /**
     * @param string $postBuyFormDateCancel
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormDateCancel($postBuyFormDateCancel)
    {
        $this->postBuyFormDateCancel = $postBuyFormDateCancel;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormShipmentId()
    {
        return $this->postBuyFormShipmentId;
    }

    /**
     * @param int $postBuyFormShipmentId
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormShipmentId($postBuyFormShipmentId)
    {
        $this->postBuyFormShipmentId = $postBuyFormShipmentId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function getPostBuyFormGdAddress()
    {
        return $this->postBuyFormGdAddress;
    }

    /**
     * @param Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormGdAddress
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormGdAddress($postBuyFormGdAddress)
    {
        $this->postBuyFormGdAddress = $postBuyFormGdAddress;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPostbuyformshipmenttrackingstruct
     */
    public function getPostBuyFormShipmentTracking()
    {
        return $this->postBuyFormShipmentTracking;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyformshipmenttrackingstruct $postBuyFormShipmentTracking
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormShipmentTracking($postBuyFormShipmentTracking)
    {
        $this->postBuyFormShipmentTracking = $postBuyFormShipmentTracking;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getPostBuyFormSurchargesList()
    {
        return $this->postBuyFormSurchargesList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $postBuyFormSurchargesList
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormSurchargesList($postBuyFormSurchargesList)
    {
        $this->postBuyFormSurchargesList = $postBuyFormSurchargesList;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormGdAdditionalInfo()
    {
        return $this->postBuyFormGdAdditionalInfo;
    }

    /**
     * @param string $postBuyFormGdAdditionalInfo
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormGdAdditionalInfo($postBuyFormGdAdditionalInfo)
    {
        $this->postBuyFormGdAdditionalInfo = $postBuyFormGdAdditionalInfo;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormPaymentAmount()
    {
        return $this->postBuyFormPaymentAmount;
    }

    /**
     * @param float $postBuyFormPaymentAmount
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormPaymentAmount($postBuyFormPaymentAmount)
    {
        $this->postBuyFormPaymentAmount = $postBuyFormPaymentAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormSentBySeller()
    {
        return $this->postBuyFormSentBySeller;
    }

    /**
     * @param int $postBuyFormSentBySeller
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormSentBySeller($postBuyFormSentBySeller)
    {
        $this->postBuyFormSentBySeller = $postBuyFormSentBySeller;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormBuyerLogin()
    {
        return $this->postBuyFormBuyerLogin;
    }

    /**
     * @param string $postBuyFormBuyerLogin
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormBuyerLogin($postBuyFormBuyerLogin)
    {
        $this->postBuyFormBuyerLogin = $postBuyFormBuyerLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormBuyerEmail()
    {
        return $this->postBuyFormBuyerEmail;
    }

    /**
     * @param string $postBuyFormBuyerEmail
     * @return Allegro_Web_Api_PostBuyFormDataStruct
     */
    public function setPostBuyFormBuyerEmail($postBuyFormBuyerEmail)
    {
        $this->postBuyFormBuyerEmail = $postBuyFormBuyerEmail;
        return $this;
    }
}
