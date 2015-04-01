<?php

/**
 * Class Allegro_Web_Api_ItemImagesStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemImagesStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItemimagelist $itemImages
     */
    protected $itemImages = null;

    /**
     * @param int $itemId
     * @param Allegro_Web_Api_ArrayOfItemimagelist $itemImages
     */
    public function __construct($itemId, $itemImages)
    {
        $this->itemId = $itemId;
        $this->itemImages = $itemImages;
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
     * @return Allegro_Web_Api_ItemImagesStruct
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemimagelist
     */
    public function getItemImages()
    {
        return $this->itemImages;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemimagelist $itemImages
     * @return Allegro_Web_Api_ItemImagesStruct
     */
    public function setItemImages($itemImages)
    {
        $this->itemImages = $itemImages;
        return $this;
    }
}
