<?php

/**
 * Class Allegro_Web_Api_DoChangeItemFieldsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoChangeItemFieldsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ChangedItemStruct $changedItem
     */
    protected $changedItem = null;

    /**
     * @param Allegro_Web_Api_ChangedItemStruct $changedItem
     */
    public function __construct($changedItem)
    {
        $this->changedItem = $changedItem;
    }

    /**
     * @return Allegro_Web_Api_ChangedItemStruct
     */
    public function getChangedItem()
    {
        return $this->changedItem;
    }

    /**
     * @param Allegro_Web_Api_ChangedItemStruct $changedItem
     * @return Allegro_Web_Api_DoChangeItemFieldsResponse
     */
    public function setChangedItem($changedItem)
    {
        $this->changedItem = $changedItem;
        return $this;
    }
}
