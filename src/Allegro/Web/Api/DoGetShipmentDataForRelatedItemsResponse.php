<?php

/**
 * Class Allegro_Web_Api_DoGetShipmentDataForRelatedItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetShipmentDataForRelatedItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_RelatedItemsShipmentDataStruct $relatedItemsShipmentData
     */
    protected $relatedItemsShipmentData = null;

    /**
     * @param Allegro_Web_Api_RelatedItemsShipmentDataStruct $relatedItemsShipmentData
     */
    public function __construct($relatedItemsShipmentData)
    {
        $this->relatedItemsShipmentData = $relatedItemsShipmentData;
    }

    /**
     * @return Allegro_Web_Api_RelatedItemsShipmentDataStruct
     */
    public function getRelatedItemsShipmentData()
    {
        return $this->relatedItemsShipmentData;
    }

    /**
     * @param Allegro_Web_Api_RelatedItemsShipmentDataStruct $relatedItemsShipmentData
     * @return Allegro_Web_Api_DoGetShipmentDataForRelatedItemsResponse
     */
    public function setRelatedItemsShipmentData($relatedItemsShipmentData)
    {
        $this->relatedItemsShipmentData = $relatedItemsShipmentData;
        return $this;
    }
}
