<?php

/**
 * Class Allegro_Web_Api_DoGetPostBuyDataRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetPostBuyDataRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $itemsArray
     */
    protected $itemsArray = null;

    /**
     * @param string                      $sessionHandle
     * @param Allegro_Web_Api_ArrayOfLong $itemsArray
     */
    public function __construct($sessionHandle, $itemsArray)
    {
        $this->sessionHandle = $sessionHandle;
        $this->itemsArray    = $itemsArray;
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
     * @return Allegro_Web_Api_DoGetPostBuyDataRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getItemsArray()
    {
        return $this->itemsArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $itemsArray
     * @return Allegro_Web_Api_DoGetPostBuyDataRequest
     */
    public function setItemsArray($itemsArray)
    {
        $this->itemsArray = $itemsArray;
        return $this;
    }
}
