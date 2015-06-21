<?php

/**
 * Class Allegro_Web_Api_PostBuyFormForBuyersDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostBuyFormForBuyersDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $postBuyFormId
     */
    protected $postBuyFormId = null;

    /**
     * @var int $postBuyFormBuyerId
     */
    protected $postBuyFormBuyerId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPostbuyformsellersstruct $postBuyFormSellers
     */
    protected $postBuyFormSellers = null;

    /**
     * @var float $postBuyFormTotalAmount
     */
    protected $postBuyFormTotalAmount = null;

    /**
     * @var int $postBuyFormInvoiceOption
     */
    protected $postBuyFormInvoiceOption = null;

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
     * @var float $postBuyFormPaymentAmount
     */
    protected $postBuyFormPaymentAmount = null;

    /**
     * @param int                                             $postBuyFormId
     * @param int                                             $postBuyFormBuyerId
     * @param Allegro_Web_Api_ArrayOfPostbuyformsellersstruct $postBuyFormSellers
     * @param float                                           $postBuyFormTotalAmount
     * @param int                                             $postBuyFormInvoiceOption
     * @param Allegro_Web_Api_PostBuyFormAddressStruct        $postBuyFormInvoiceData
     * @param Allegro_Web_Api_PostBuyFormAddressStruct        $postBuyFormShipmentAddress
     * @param string                                          $postBuyFormPayType
     * @param int                                             $postBuyFormPayId
     * @param string                                          $postBuyFormPayStatus
     * @param string                                          $postBuyFormDateInit
     * @param string                                          $postBuyFormDateRecv
     * @param string                                          $postBuyFormDateCancel
     * @param float                                           $postBuyFormPaymentAmount
     */
    public function __construct($postBuyFormId, $postBuyFormBuyerId, $postBuyFormSellers, $postBuyFormTotalAmount, $postBuyFormInvoiceOption, $postBuyFormInvoiceData, $postBuyFormShipmentAddress, $postBuyFormPayType, $postBuyFormPayId, $postBuyFormPayStatus, $postBuyFormDateInit, $postBuyFormDateRecv, $postBuyFormDateCancel, $postBuyFormPaymentAmount)
    {
        $this->postBuyFormId              = $postBuyFormId;
        $this->postBuyFormBuyerId         = $postBuyFormBuyerId;
        $this->postBuyFormSellers         = $postBuyFormSellers;
        $this->postBuyFormTotalAmount     = $postBuyFormTotalAmount;
        $this->postBuyFormInvoiceOption   = $postBuyFormInvoiceOption;
        $this->postBuyFormInvoiceData     = $postBuyFormInvoiceData;
        $this->postBuyFormShipmentAddress = $postBuyFormShipmentAddress;
        $this->postBuyFormPayType         = $postBuyFormPayType;
        $this->postBuyFormPayId           = $postBuyFormPayId;
        $this->postBuyFormPayStatus       = $postBuyFormPayStatus;
        $this->postBuyFormDateInit        = $postBuyFormDateInit;
        $this->postBuyFormDateRecv        = $postBuyFormDateRecv;
        $this->postBuyFormDateCancel      = $postBuyFormDateCancel;
        $this->postBuyFormPaymentAmount   = $postBuyFormPaymentAmount;
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormId($postBuyFormId)
    {
        $this->postBuyFormId = $postBuyFormId;
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormBuyerId($postBuyFormBuyerId)
    {
        $this->postBuyFormBuyerId = $postBuyFormBuyerId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPostbuyformsellersstruct
     */
    public function getPostBuyFormSellers()
    {
        return $this->postBuyFormSellers;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyformsellersstruct $postBuyFormSellers
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormSellers($postBuyFormSellers)
    {
        $this->postBuyFormSellers = $postBuyFormSellers;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormTotalAmount()
    {
        return $this->postBuyFormTotalAmount;
    }

    /**
     * @param float $postBuyFormTotalAmount
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormTotalAmount($postBuyFormTotalAmount)
    {
        $this->postBuyFormTotalAmount = $postBuyFormTotalAmount;
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormInvoiceOption($postBuyFormInvoiceOption)
    {
        $this->postBuyFormInvoiceOption = $postBuyFormInvoiceOption;
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormDateCancel($postBuyFormDateCancel)
    {
        $this->postBuyFormDateCancel = $postBuyFormDateCancel;
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
     * @return Allegro_Web_Api_PostBuyFormForBuyersDataStruct
     */
    public function setPostBuyFormPaymentAmount($postBuyFormPaymentAmount)
    {
        $this->postBuyFormPaymentAmount = $postBuyFormPaymentAmount;
        return $this;
    }
}
