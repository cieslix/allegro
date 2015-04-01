<?php

/**
 * Class Allegro_Web_Api_DoSetShipmentPriceTypeRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSetShipmentPriceTypeRequest extends Allegro_Web_Api_Abstract
{
    const PRICE_TYPE_MOST_EXPENSIVE = 1;
    const PRICE_TYPE_CHEAPEST = 2;
    const PRICE_TYPE_SEPARATELY = 3;

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $shipmentPriceTypeId
     */
    protected $shipmentPriceTypeId = null;

    /**
     * @param string $sessionId
     * @param int $shipmentPriceTypeId
     */
    public function __construct($sessionId, $shipmentPriceTypeId)
    {
        $this->sessionId = $sessionId;
        $this->shipmentPriceTypeId = $shipmentPriceTypeId;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return Allegro_Web_Api_DoSetShipmentPriceTypeRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipmentPriceTypeId()
    {
        return $this->shipmentPriceTypeId;
    }

    /**
     * @param int $shipmentPriceTypeId
     * @return Allegro_Web_Api_DoSetShipmentPriceTypeRequest
     */
    public function setShipmentPriceTypeId($shipmentPriceTypeId)
    {
        $this->shipmentPriceTypeId = $shipmentPriceTypeId;
        return $this;
    }
}
