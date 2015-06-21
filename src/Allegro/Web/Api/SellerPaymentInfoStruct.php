<?php

/**
 * Class Allegro_Web_Api_SellerPaymentInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellerPaymentInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct $shipmentPaymentInfoPza
     */
    protected $shipmentPaymentInfoPza = null;

    /**
     * @var Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct $shipmentPaymentInfoNonPza
     */
    protected $shipmentPaymentInfoNonPza = null;

    /**
     * @param Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct $shipmentPaymentInfoPza
     * @param Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct $shipmentPaymentInfoNonPza
     */
    public function __construct($shipmentPaymentInfoPza, $shipmentPaymentInfoNonPza)
    {
        $this->shipmentPaymentInfoPza    = $shipmentPaymentInfoPza;
        $this->shipmentPaymentInfoNonPza = $shipmentPaymentInfoNonPza;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct
     */
    public function getShipmentPaymentInfoPza()
    {
        return $this->shipmentPaymentInfoPza;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct $shipmentPaymentInfoPza
     * @return Allegro_Web_Api_SellerPaymentInfoStruct
     */
    public function setShipmentPaymentInfoPza($shipmentPaymentInfoPza)
    {
        $this->shipmentPaymentInfoPza = $shipmentPaymentInfoPza;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct
     */
    public function getShipmentPaymentInfoNonPza()
    {
        return $this->shipmentPaymentInfoNonPza;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfShipmentpaymentinfostruct $shipmentPaymentInfoNonPza
     * @return Allegro_Web_Api_SellerPaymentInfoStruct
     */
    public function setShipmentPaymentInfoNonPza($shipmentPaymentInfoNonPza)
    {
        $this->shipmentPaymentInfoNonPza = $shipmentPaymentInfoNonPza;
        return $this;
    }
}
