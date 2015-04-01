<?php

/**
 * Class Allegro_Web_Api_DoGetMyCurrentShipmentPriceTypeResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyCurrentShipmentPriceTypeResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $shipmentPriceTypeId
     */
    protected $shipmentPriceTypeId = null;

    /**
     * @param int $shipmentPriceTypeId
     */
    public function __construct($shipmentPriceTypeId)
    {
        $this->shipmentPriceTypeId = $shipmentPriceTypeId;
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
     * @return Allegro_Web_Api_DoGetMyCurrentShipmentPriceTypeResponse
     */
    public function setShipmentPriceTypeId($shipmentPriceTypeId)
    {
        $this->shipmentPriceTypeId = $shipmentPriceTypeId;
        return $this;
    }
}
