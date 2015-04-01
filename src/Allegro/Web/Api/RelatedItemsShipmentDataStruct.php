<?php

/**
 * Class Allegro_Web_Api_RelatedItemsShipmentDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RelatedItemsShipmentDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfSellershipmentdatastruct $sellerShipmentData
     */
    protected $sellerShipmentData = null;

    /**
     * @param Allegro_Web_Api_ArrayOfSellershipmentdatastruct $sellerShipmentData
     */
    public function __construct($sellerShipmentData)
    {
        $this->sellerShipmentData = $sellerShipmentData;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellershipmentdatastruct
     */
    public function getSellerShipmentData()
    {
        return $this->sellerShipmentData;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellershipmentdatastruct $sellerShipmentData
     * @return Allegro_Web_Api_RelatedItemsShipmentDataStruct
     */
    public function setSellerShipmentData($sellerShipmentData)
    {
        $this->sellerShipmentData = $sellerShipmentData;
        return $this;
    }
}
