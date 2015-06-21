<?php

/**
 * Class Allegro_Web_Api_DoChangeQuantityItemResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoChangeQuantityItemResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemInfo
     */
    protected $itemInfo = null;

    /**
     * @var int $itemQuantityLeft
     */
    protected $itemQuantityLeft = null;

    /**
     * @var int $itemQuantitySold
     */
    protected $itemQuantitySold = null;

    /**
     * @param int    $itemId
     * @param string $itemInfo
     * @param int    $itemQuantityLeft
     * @param int    $itemQuantitySold
     */
    public function __construct($itemId, $itemInfo, $itemQuantityLeft, $itemQuantitySold)
    {
        $this->itemId           = $itemId;
        $this->itemInfo         = $itemInfo;
        $this->itemQuantityLeft = $itemQuantityLeft;
        $this->itemQuantitySold = $itemQuantitySold;
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
     * @return Allegro_Web_Api_DoChangeQuantityItemResponse
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemInfo()
    {
        return $this->itemInfo;
    }

    /**
     * @param string $itemInfo
     * @return Allegro_Web_Api_DoChangeQuantityItemResponse
     */
    public function setItemInfo($itemInfo)
    {
        $this->itemInfo = $itemInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemQuantityLeft()
    {
        return $this->itemQuantityLeft;
    }

    /**
     * @param int $itemQuantityLeft
     * @return Allegro_Web_Api_DoChangeQuantityItemResponse
     */
    public function setItemQuantityLeft($itemQuantityLeft)
    {
        $this->itemQuantityLeft = $itemQuantityLeft;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemQuantitySold()
    {
        return $this->itemQuantitySold;
    }

    /**
     * @param int $itemQuantitySold
     * @return Allegro_Web_Api_DoChangeQuantityItemResponse
     */
    public function setItemQuantitySold($itemQuantitySold)
    {
        $this->itemQuantitySold = $itemQuantitySold;
        return $this;
    }
}
