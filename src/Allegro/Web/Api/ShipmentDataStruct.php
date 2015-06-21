<?php

/**
 * Class Allegro_Web_Api_ShipmentDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ShipmentDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $shipmentId
     */
    protected $shipmentId = null;

    /**
     * @var string $shipmentName
     */
    protected $shipmentName = null;

    /**
     * @var int $shipmentType
     */
    protected $shipmentType = null;

    /**
     * @var Allegro_Web_Api_ShipmentTimeStruct $shipmentTime
     */
    protected $shipmentTime = null;

    /**
     * @param int                                $shipmentId
     * @param string                             $shipmentName
     * @param int                                $shipmentType
     * @param Allegro_Web_Api_ShipmentTimeStruct $shipmentTime
     */
    public function __construct($shipmentId, $shipmentName, $shipmentType, $shipmentTime)
    {
        $this->shipmentId   = $shipmentId;
        $this->shipmentName = $shipmentName;
        $this->shipmentType = $shipmentType;
        $this->shipmentTime = $shipmentTime;
    }

    /**
     * @return int
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    /**
     * @param int $shipmentId
     * @return Allegro_Web_Api_ShipmentDataStruct
     */
    public function setShipmentId($shipmentId)
    {
        $this->shipmentId = $shipmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentName()
    {
        return $this->shipmentName;
    }

    /**
     * @param string $shipmentName
     * @return Allegro_Web_Api_ShipmentDataStruct
     */
    public function setShipmentName($shipmentName)
    {
        $this->shipmentName = $shipmentName;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipmentType()
    {
        return $this->shipmentType;
    }

    /**
     * @param int $shipmentType
     * @return Allegro_Web_Api_ShipmentDataStruct
     */
    public function setShipmentType($shipmentType)
    {
        $this->shipmentType = $shipmentType;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ShipmentTimeStruct
     */
    public function getShipmentTime()
    {
        return $this->shipmentTime;
    }

    /**
     * @param Allegro_Web_Api_ShipmentTimeStruct $shipmentTime
     * @return Allegro_Web_Api_ShipmentDataStruct
     */
    public function setShipmentTime($shipmentTime)
    {
        $this->shipmentTime = $shipmentTime;
        return $this;
    }
}
