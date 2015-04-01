<?php

/**
 * Class Allegro_Web_Api_ChangedItemStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ChangedItemStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFieldsvalue $itemFields
     */
    protected $itemFields = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItemsurchargestruct $itemSurcharge
     */
    protected $itemSurcharge = null;

    /**
     * @param int $itemId
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $itemFields
     * @param Allegro_Web_Api_ArrayOfItemsurchargestruct $itemSurcharge
     */
    public function __construct($itemId, $itemFields, $itemSurcharge)
    {
        $this->itemId = $itemId;
        $this->itemFields = $itemFields;
        $this->itemSurcharge = $itemSurcharge;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return Allegro_Web_Api_ChangedItemStruct
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFieldsvalue
     */
    public function getItemFields()
    {
        return $this->itemFields;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $itemFields
     * @return Allegro_Web_Api_ChangedItemStruct
     */
    public function setItemFields($itemFields)
    {
        $this->itemFields = $itemFields;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemsurchargestruct
     */
    public function getItemSurcharge()
    {
        return $this->itemSurcharge;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemsurchargestruct $itemSurcharge
     * @return Allegro_Web_Api_ChangedItemStruct
     */
    public function setItemSurcharge($itemSurcharge)
    {
        $this->itemSurcharge = $itemSurcharge;
        return $this;
    }
}
