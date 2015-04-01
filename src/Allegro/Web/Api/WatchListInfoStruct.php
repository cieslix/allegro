<?php

/**
 * Class Allegro_Web_Api_WatchListInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_WatchListInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfLong $itemsAdded
     */
    protected $itemsAdded = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItemsnotaddedstruct $itemsNotAdded
     */
    protected $itemsNotAdded = null;

    /**
     * @param Allegro_Web_Api_ArrayOfLong $itemsAdded
     * @param Allegro_Web_Api_ArrayOfItemsnotaddedstruct $itemsNotAdded
     */
    public function __construct($itemsAdded, $itemsNotAdded)
    {
        $this->itemsAdded = $itemsAdded;
        $this->itemsNotAdded = $itemsNotAdded;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getItemsAdded()
    {
        return $this->itemsAdded;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $itemsAdded
     * @return Allegro_Web_Api_WatchListInfoStruct
     */
    public function setItemsAdded($itemsAdded)
    {
        $this->itemsAdded = $itemsAdded;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemsnotaddedstruct
     */
    public function getItemsNotAdded()
    {
        return $this->itemsNotAdded;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemsnotaddedstruct $itemsNotAdded
     * @return Allegro_Web_Api_WatchListInfoStruct
     */
    public function setItemsNotAdded($itemsNotAdded)
    {
        $this->itemsNotAdded = $itemsNotAdded;
        return $this;
    }
}
