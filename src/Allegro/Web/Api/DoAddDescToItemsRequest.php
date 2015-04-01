<?php

/**
 * Class Allegro_Web_Api_DoAddDescToItemsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoAddDescToItemsRequest extends Allegro_Web_Api_Abstract
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
     * @var string $itDescription
     */
    protected $itDescription = null;

    /**
     * @param string $sessionHandle
     * @param Allegro_Web_Api_ArrayOfLong $itemsIdArray
     * @param string $itDescription
     */
    public function __construct($sessionHandle, $itemsIdArray, $itDescription)
    {
        $this->sessionHandle = $sessionHandle;
        $this->itemsIdArray = $itemsIdArray;
        $this->itDescription = $itDescription;
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
     * @return Allegro_Web_Api_DoAddDescToItemsRequest
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
     * @return Allegro_Web_Api_DoAddDescToItemsRequest
     */
    public function setItemsIdArray($itemsIdArray)
    {
        $this->itemsIdArray = $itemsIdArray;
        return $this;
    }

    /**
     * @return string
     */
    public function getItDescription()
    {
        return $this->itDescription;
    }

    /**
     * @param string $itDescription
     * @return Allegro_Web_Api_DoAddDescToItemsRequest
     */
    public function setItDescription($itDescription)
    {
        $this->itDescription = $itDescription;
        return $this;
    }
}
