<?php

/**
 * Class Allegro_Web_Api_DoCheckItemDescriptionResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCheckItemDescriptionResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ItemDescriptionStruct $itemDescription
     */
    protected $itemDescription = null;

    /**
     * @param Allegro_Web_Api_ItemDescriptionStruct $itemDescription
     */
    public function __construct($itemDescription)
    {
        $this->itemDescription = $itemDescription;
    }

    /**
     * @return Allegro_Web_Api_ItemDescriptionStruct
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * @param Allegro_Web_Api_ItemDescriptionStruct $itemDescription
     * @return Allegro_Web_Api_DoCheckItemDescriptionResponse
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;
        return $this;
    }
}
