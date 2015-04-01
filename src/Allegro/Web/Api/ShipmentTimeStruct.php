<?php

/**
 * Class Allegro_Web_Api_ShipmentTimeStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ShipmentTimeStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $shipmentTimeFrom
     */
    protected $shipmentTimeFrom = null;

    /**
     * @var int $shipmentTimeTo
     */
    protected $shipmentTimeTo = null;

    /**
     * @param int $shipmentTimeFrom
     * @param int $shipmentTimeTo
     */
    public function __construct($shipmentTimeFrom, $shipmentTimeTo)
    {
        $this->shipmentTimeFrom = $shipmentTimeFrom;
        $this->shipmentTimeTo = $shipmentTimeTo;
    }

    /**
     * @return int
     */
    public function getShipmentTimeFrom()
    {
        return $this->shipmentTimeFrom;
    }

    /**
     * @param int $shipmentTimeFrom
     * @return Allegro_Web_Api_ShipmentTimeStruct
     */
    public function setShipmentTimeFrom($shipmentTimeFrom)
    {
        $this->shipmentTimeFrom = $shipmentTimeFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipmentTimeTo()
    {
        return $this->shipmentTimeTo;
    }

    /**
     * @param int $shipmentTimeTo
     * @return Allegro_Web_Api_ShipmentTimeStruct
     */
    public function setShipmentTimeTo($shipmentTimeTo)
    {
        $this->shipmentTimeTo = $shipmentTimeTo;
        return $this;
    }
}
