<?php

/**
 * Class Allegro_Web_Api_DoGetShipmentPriceTypesResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetShipmentPriceTypesResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfShipmentpricetypestruct $shipmentPriceTypes
     */
    protected $shipmentPriceTypes = null;

    /**
     * @param Allegro_Web_Api_ArrayOfShipmentpricetypestruct $shipmentPriceTypes
     */
    public function __construct($shipmentPriceTypes)
    {
        $this->shipmentPriceTypes = $shipmentPriceTypes;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfShipmentpricetypestruct
     */
    public function getShipmentPriceTypes()
    {
        return $this->shipmentPriceTypes;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfShipmentpricetypestruct $shipmentPriceTypes
     * @return Allegro_Web_Api_DoGetShipmentPriceTypesResponse
     */
    public function setShipmentPriceTypes($shipmentPriceTypes)
    {
        $this->shipmentPriceTypes = $shipmentPriceTypes;
        return $this;
    }
}
