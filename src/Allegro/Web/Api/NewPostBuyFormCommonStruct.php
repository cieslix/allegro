<?php

/**
 * Class Allegro_Web_Api_NewPostBuyFormCommonStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_NewPostBuyFormCommonStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $paymentMethodId
     */
    protected $paymentMethodId = null;

    /**
     * @var int $shipmentAddressType
     */
    protected $shipmentAddressType = null;

    /**
     * @var AddressUserDataStruct $shipmentAddressData
     */
    protected $shipmentAddressData = null;

    /**
     * @var string $contactPhone
     */
    protected $contactPhone = null;

    /**
     * @var int $invoiceOption
     */
    protected $invoiceOption = null;

    /**
     * @var Allegro_Web_Api_InvoiceInfoStruct $invoiceInfo
     */
    protected $invoiceInfo = null;

    /**
     * @param string $paymentMethodId
     * @param int $shipmentAddressType
     * @param AddressUserDataStruct $shipmentAddressData
     * @param string $contactPhone
     * @param int $invoiceOption
     * @param Allegro_Web_Api_InvoiceInfoStruct $invoiceInfo
     */
    public function __construct($paymentMethodId, $shipmentAddressType, $shipmentAddressData, $contactPhone, $invoiceOption, $invoiceInfo)
    {
        $this->paymentMethodId = $paymentMethodId;
        $this->shipmentAddressType = $shipmentAddressType;
        $this->shipmentAddressData = $shipmentAddressData;
        $this->contactPhone = $contactPhone;
        $this->invoiceOption = $invoiceOption;
        $this->invoiceInfo = $invoiceInfo;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodId
     * @return Allegro_Web_Api_NewPostBuyFormCommonStruct
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipmentAddressType()
    {
        return $this->shipmentAddressType;
    }

    /**
     * @param int $shipmentAddressType
     * @return Allegro_Web_Api_NewPostBuyFormCommonStruct
     */
    public function setShipmentAddressType($shipmentAddressType)
    {
        $this->shipmentAddressType = $shipmentAddressType;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_AddressUserDataStruct
     */
    public function getShipmentAddressData()
    {
        return $this->shipmentAddressData;
    }

    /**
     * @param AddressUserDataStruct $shipmentAddressData
     * @return Allegro_Web_Api_NewPostBuyFormCommonStruct
     */
    public function setShipmentAddressData($shipmentAddressData)
    {
        $this->shipmentAddressData = $shipmentAddressData;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     * @return Allegro_Web_Api_NewPostBuyFormCommonStruct
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceOption()
    {
        return $this->invoiceOption;
    }

    /**
     * @param int $invoiceOption
     * @return Allegro_Web_Api_NewPostBuyFormCommonStruct
     */
    public function setInvoiceOption($invoiceOption)
    {
        $this->invoiceOption = $invoiceOption;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_InvoiceInfoStruct
     */
    public function getInvoiceInfo()
    {
        return $this->invoiceInfo;
    }

    /**
     * @param Allegro_Web_Api_InvoiceInfoStruct $invoiceInfo
     * @return Allegro_Web_Api_NewPostBuyFormCommonStruct
     */
    public function setInvoiceInfo($invoiceInfo)
    {
        $this->invoiceInfo = $invoiceInfo;
        return $this;
    }
}
