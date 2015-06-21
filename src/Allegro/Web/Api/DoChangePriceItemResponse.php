<?php

/**
 * Class Allegro_Web_Api_DoChangePriceItemResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoChangePriceItemResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $itemInfo
     */
    protected $itemInfo = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @param string $itemInfo
     * @param int    $itemId
     */
    public function __construct($itemInfo, $itemId)
    {
        $this->itemInfo = $itemInfo;
        $this->itemId   = $itemId;
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
     * @return Allegro_Web_Api_DoChangePriceItemResponse
     */
    public function setItemInfo($itemInfo)
    {
        $this->itemInfo = $itemInfo;
        return $this;
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
     * @return Allegro_Web_Api_DoChangePriceItemResponse
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }
}
