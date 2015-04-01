<?php

/**
 * Class Allegro_Web_Api_InvoiceInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_InvoiceInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $invoiceAddressType
     */
    protected $invoiceAddressType = null;

    /**
     * @var AddressUserDataStruct $invoiceAddressData
     */
    protected $invoiceAddressData = null;

    /**
     * @var string $invoiceNip
     */
    protected $invoiceNip = null;

    /**
     * @param int $invoiceAddressType
     * @param AddressUserDataStruct $invoiceAddressData
     * @param string $invoiceNip
     */
    public function __construct($invoiceAddressType, $invoiceAddressData, $invoiceNip)
    {
        $this->invoiceAddressType = $invoiceAddressType;
        $this->invoiceAddressData = $invoiceAddressData;
        $this->invoiceNip = $invoiceNip;
    }

    /**
     * @return int
     */
    public function getInvoiceAddressType()
    {
        return $this->invoiceAddressType;
    }

    /**
     * @param int $invoiceAddressType
     * @return Allegro_Web_Api_InvoiceInfoStruct
     */
    public function setInvoiceAddressType($invoiceAddressType)
    {
        $this->invoiceAddressType = $invoiceAddressType;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_AddressUserDataStruct
     */
    public function getInvoiceAddressData()
    {
        return $this->invoiceAddressData;
    }

    /**
     * @param AddressUserDataStruct $invoiceAddressData
     * @return Allegro_Web_Api_InvoiceInfoStruct
     */
    public function setInvoiceAddressData($invoiceAddressData)
    {
        $this->invoiceAddressData = $invoiceAddressData;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNip()
    {
        return $this->invoiceNip;
    }

    /**
     * @param string $invoiceNip
     * @return Allegro_Web_Api_InvoiceInfoStruct
     */
    public function setInvoiceNip($invoiceNip)
    {
        $this->invoiceNip = $invoiceNip;
        return $this;
    }
}
