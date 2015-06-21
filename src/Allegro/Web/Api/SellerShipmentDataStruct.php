<?php

/**
 * Class Allegro_Web_Api_SellerShipmentDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellerShipmentDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellerId
     */
    protected $sellerId = null;

    /**
     * @var Allegro_Web_Api_SellerPaymentInfoStruct $sellerPaymentInfo
     */
    protected $sellerPaymentInfo = null;

    /**
     * @var int $sellerOtherShipmentIsActive
     */
    protected $sellerOtherShipmentIsActive = null;

    /**
     * @var Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct $generalDeliveryPaymentInfo
     */
    protected $generalDeliveryPaymentInfo = null;

    /**
     * @param int                                              $sellerId
     * @param Allegro_Web_Api_SellerPaymentInfoStruct          $sellerPaymentInfo
     * @param int                                              $sellerOtherShipmentIsActive
     * @param Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct $generalDeliveryPaymentInfo
     */
    public function __construct($sellerId, $sellerPaymentInfo, $sellerOtherShipmentIsActive, $generalDeliveryPaymentInfo)
    {
        $this->sellerId                    = $sellerId;
        $this->sellerPaymentInfo           = $sellerPaymentInfo;
        $this->sellerOtherShipmentIsActive = $sellerOtherShipmentIsActive;
        $this->generalDeliveryPaymentInfo  = $generalDeliveryPaymentInfo;
    }

    /**
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * @param int $sellerId
     * @return Allegro_Web_Api_SellerShipmentDataStruct
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_SellerPaymentInfoStruct
     */
    public function getSellerPaymentInfo()
    {
        return $this->sellerPaymentInfo;
    }

    /**
     * @param Allegro_Web_Api_SellerPaymentInfoStruct $sellerPaymentInfo
     * @return Allegro_Web_Api_SellerShipmentDataStruct
     */
    public function setSellerPaymentInfo($sellerPaymentInfo)
    {
        $this->sellerPaymentInfo = $sellerPaymentInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellerOtherShipmentIsActive()
    {
        return $this->sellerOtherShipmentIsActive;
    }

    /**
     * @param int $sellerOtherShipmentIsActive
     * @return Allegro_Web_Api_SellerShipmentDataStruct
     */
    public function setSellerOtherShipmentIsActive($sellerOtherShipmentIsActive)
    {
        $this->sellerOtherShipmentIsActive = $sellerOtherShipmentIsActive;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct
     */
    public function getGeneralDeliveryPaymentInfo()
    {
        return $this->generalDeliveryPaymentInfo;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct $generalDeliveryPaymentInfo
     * @return Allegro_Web_Api_SellerShipmentDataStruct
     */
    public function setGeneralDeliveryPaymentInfo($generalDeliveryPaymentInfo)
    {
        $this->generalDeliveryPaymentInfo = $generalDeliveryPaymentInfo;
        return $this;
    }
}
