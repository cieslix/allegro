<?php

/**
 * Class Allegro_Web_Api_ArrayOfSellershipmentdatastruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfSellershipmentdatastruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_SellerShipmentDataStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_SellerShipmentDataStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_SellerShipmentDataStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_SellerShipmentDataStruct[] $item
     * @return Allegro_Web_Api_ArrayOfSellershipmentdatastruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
