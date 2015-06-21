<?php

/**
 * Class Allegro_Web_Api_DoNewAuctionExtResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoNewAuctionExtResponse extends Allegro_Web_Api_Abstract
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
     * @var int $itemIsAllegroStandard
     */
    protected $itemIsAllegroStandard = null;

    /**
     * @param int    $itemId
     * @param string $itemInfo
     * @param int    $itemIsAllegroStandard
     */
    public function __construct($itemId, $itemInfo, $itemIsAllegroStandard)
    {
        $this->itemId                = $itemId;
        $this->itemInfo              = $itemInfo;
        $this->itemIsAllegroStandard = $itemIsAllegroStandard;
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
     * @return Allegro_Web_Api_DoNewAuctionExtResponse
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
     * @return Allegro_Web_Api_DoNewAuctionExtResponse
     */
    public function setItemInfo($itemInfo)
    {
        $this->itemInfo = $itemInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemIsAllegroStandard()
    {
        return $this->itemIsAllegroStandard;
    }

    /**
     * @param int $itemIsAllegroStandard
     * @return Allegro_Web_Api_DoNewAuctionExtResponse
     */
    public function setItemIsAllegroStandard($itemIsAllegroStandard)
    {
        $this->itemIsAllegroStandard = $itemIsAllegroStandard;
        return $this;
    }
}
