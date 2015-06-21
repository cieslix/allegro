<?php

/**
 * Class Allegro_Web_Api_DoGetShipmentDataResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetShipmentDataResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfShipmentdatastruct $shipmentDataList
     */
    protected $shipmentDataList = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @param Allegro_Web_Api_ArrayOfShipmentdatastruct $shipmentDataList
     * @param int                                       $localVersion
     */
    public function __construct($shipmentDataList, $localVersion)
    {
        $this->shipmentDataList = $shipmentDataList;
        $this->localVersion     = $localVersion;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfShipmentdatastruct
     */
    public function getShipmentDataList()
    {
        return $this->shipmentDataList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfShipmentdatastruct $shipmentDataList
     * @return Allegro_Web_Api_DoGetShipmentDataResponse
     */
    public function setShipmentDataList($shipmentDataList)
    {
        $this->shipmentDataList = $shipmentDataList;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalVersion()
    {
        return $this->localVersion;
    }

    /**
     * @param int $localVersion
     * @return Allegro_Web_Api_DoGetShipmentDataResponse
     */
    public function setLocalVersion($localVersion)
    {
        $this->localVersion = $localVersion;
        return $this;
    }
}
