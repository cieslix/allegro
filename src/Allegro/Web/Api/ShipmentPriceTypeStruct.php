<?php

/**
 * Class Allegro_Web_Api_ShipmentPriceTypeStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ShipmentPriceTypeStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $shipmentPriceTypeId
     */
    protected $shipmentPriceTypeId = null;

    /**
     * @var string $shipmentPriceTypeName
     */
    protected $shipmentPriceTypeName = null;

    /**
     * @param int $shipmentPriceTypeId
     * @param string $shipmentPriceTypeName
     */
    public function __construct($shipmentPriceTypeId, $shipmentPriceTypeName)
    {
        $this->shipmentPriceTypeId = $shipmentPriceTypeId;
        $this->shipmentPriceTypeName = $shipmentPriceTypeName;
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
     * @return Allegro_Web_Api_ShipmentPriceTypeStruct
     */
    public function setShipmentPriceTypeId($shipmentPriceTypeId)
    {
        $this->shipmentPriceTypeId = $shipmentPriceTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentPriceTypeName()
    {
        return $this->shipmentPriceTypeName;
    }

    /**
     * @param string $shipmentPriceTypeName
     * @return Allegro_Web_Api_ShipmentPriceTypeStruct
     */
    public function setShipmentPriceTypeName($shipmentPriceTypeName)
    {
        $this->shipmentPriceTypeName = $shipmentPriceTypeName;
        return $this;
    }
}
