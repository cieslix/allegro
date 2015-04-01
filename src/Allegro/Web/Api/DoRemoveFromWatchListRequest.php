<?php

/**
 * Class Allegro_Web_Api_DoRemoveFromWatchListRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRemoveFromWatchListRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $itemsIdArray
     */
    protected $itemsIdArray = null;

    /**
     * @param string $sessionHandle
     * @param Allegro_Web_Api_ArrayOfLong $itemsIdArray
     */
    public function __construct($sessionHandle, $itemsIdArray)
    {
        $this->sessionHandle = $sessionHandle;
        $this->itemsIdArray = $itemsIdArray;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return Allegro_Web_Api_DoRemoveFromWatchListRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getItemsIdArray()
    {
        return $this->itemsIdArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $itemsIdArray
     * @return Allegro_Web_Api_DoRemoveFromWatchListRequest
     */
    public function setItemsIdArray($itemsIdArray)
    {
        $this->itemsIdArray = $itemsIdArray;
        return $this;
    }
}
