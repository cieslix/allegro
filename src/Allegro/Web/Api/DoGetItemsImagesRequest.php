<?php

/**
 * Class Allegro_Web_Api_DoGetItemsImagesRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetItemsImagesRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItemgetimage $itemsArray
     */
    protected $itemsArray = null;

    /**
     * @var int $imageType
     */
    protected $imageType = null;

    /**
     * @param string $sessionHandle
     * @param Allegro_Web_Api_ArrayOfItemgetimage $itemsArray
     * @param int $imageType
     */
    public function __construct($sessionHandle, $itemsArray, $imageType)
    {
        $this->sessionHandle = $sessionHandle;
        $this->itemsArray = $itemsArray;
        $this->imageType = $imageType;
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
     * @return Allegro_Web_Api_DoGetItemsImagesRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemgetimage
     */
    public function getItemsArray()
    {
        return $this->itemsArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemgetimage $itemsArray
     * @return Allegro_Web_Api_DoGetItemsImagesRequest
     */
    public function setItemsArray($itemsArray)
    {
        $this->itemsArray = $itemsArray;
        return $this;
    }

    /**
     * @return int
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * @param int $imageType
     * @return Allegro_Web_Api_DoGetItemsImagesRequest
     */
    public function setImageType($imageType)
    {
        $this->imageType = $imageType;
        return $this;
    }
}
