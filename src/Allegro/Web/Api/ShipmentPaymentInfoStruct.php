<?php

/**
 * Class Allegro_Web_Api_ShipmentPaymentInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ShipmentPaymentInfoStruct extends Allegro_Web_Api_Abstract
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
     * @var float $shipmentAmount
     */
    protected $shipmentAmount = null;

    /**
     * @var int $shipmentPaymentType
     */
    protected $shipmentPaymentType = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $shipmentItemIds
     */
    protected $shipmentItemIds = null;

    /**
     * @param int $shipmentId
     * @param string $shipmentName
     * @param float $shipmentAmount
     * @param int $shipmentPaymentType
     * @param Allegro_Web_Api_ArrayOfLong $shipmentItemIds
     */
    public function __construct($shipmentId, $shipmentName, $shipmentAmount, $shipmentPaymentType, $shipmentItemIds)
    {
        $this->shipmentId = $shipmentId;
        $this->shipmentName = $shipmentName;
        $this->shipmentAmount = $shipmentAmount;
        $this->shipmentPaymentType = $shipmentPaymentType;
        $this->shipmentItemIds = $shipmentItemIds;
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
     * @return Allegro_Web_Api_ShipmentPaymentInfoStruct
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
     * @return Allegro_Web_Api_ShipmentPaymentInfoStruct
     */
    public function setShipmentName($shipmentName)
    {
        $this->shipmentName = $shipmentName;
        return $this;
    }

    /**
     * @return float
     */
    public function getShipmentAmount()
    {
        return $this->shipmentAmount;
    }

    /**
     * @param float $shipmentAmount
     * @return Allegro_Web_Api_ShipmentPaymentInfoStruct
     */
    public function setShipmentAmount($shipmentAmount)
    {
        $this->shipmentAmount = $shipmentAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipmentPaymentType()
    {
        return $this->shipmentPaymentType;
    }

    /**
     * @param int $shipmentPaymentType
     * @return Allegro_Web_Api_ShipmentPaymentInfoStruct
     */
    public function setShipmentPaymentType($shipmentPaymentType)
    {
        $this->shipmentPaymentType = $shipmentPaymentType;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getShipmentItemIds()
    {
        return $this->shipmentItemIds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $shipmentItemIds
     * @return Allegro_Web_Api_ShipmentPaymentInfoStruct
     */
    public function setShipmentItemIds($shipmentItemIds)
    {
        $this->shipmentItemIds = $shipmentItemIds;
        return $this;
    }
}
