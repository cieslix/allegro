<?php

/**
 * Class Allegro_Web_Api_DoSellSomeAgainRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSellSomeAgainRequest extends Allegro_Web_Api_Abstract
{
    const AUCTION_DURATION_3DAYS  = 3;
    const AUCTION_DURATION_5DAYS  = 5;
    const AUCTION_DURATION_7DAYS  = 7;
    const AUCTION_DURATION_10DAYS = 10;
    const AUCTION_DURATION_14DAYS = 14;
    const AUCTION_DURATION_21DAYS = 21; //available only in: Russia, Ukraine, Romania and Serbia)

    const OPTION_REMOVE_SOURCE      = 1;
    const OPTION_SEND_CONFIRM_EMAIL = 2;
    const OPTION_BOTH               = 3;

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $sellItemsArray
     */
    protected $sellItemsArray = null;

    /**
     * @var int $sellStartingTime
     */
    protected $sellStartingTime = null;

    /**
     * @var int $sellAuctionDuration
     */
    protected $sellAuctionDuration = null;

    /**
     * @var int $sellOptions
     */
    protected $sellOptions = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInt $localIds
     */
    protected $localIds = null;

    /**
     * @var int $sellProlongOptions
     */
    protected $sellProlongOptions = null;

    /**
     * @param string                      $sessionHandle
     * @param Allegro_Web_Api_ArrayOfLong $sellItemsArray
     * @param int                         $sellStartingTime
     * @param int                         $sellAuctionDuration
     * @param int                         $sellOptions
     * @param Allegro_Web_Api_ArrayOfInt  $localIds
     * @param int                         $sellProlongOptions
     */
    public function __construct($sessionHandle, $sellItemsArray, $sellStartingTime, $sellAuctionDuration, $sellOptions, $localIds, $sellProlongOptions)
    {
        $this->sessionHandle       = $sessionHandle;
        $this->sellItemsArray      = $sellItemsArray;
        $this->sellStartingTime    = $sellStartingTime;
        $this->sellAuctionDuration = $sellAuctionDuration;
        $this->sellOptions         = $sellOptions;
        $this->localIds            = $localIds;
        $this->sellProlongOptions  = $sellProlongOptions;
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
     * @return Allegro_Web_Api_DoSellSomeAgainRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getSellItemsArray()
    {
        return $this->sellItemsArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $sellItemsArray
     * @return Allegro_Web_Api_DoSellSomeAgainRequest
     */
    public function setSellItemsArray($sellItemsArray)
    {
        $this->sellItemsArray = $sellItemsArray;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellStartingTime()
    {
        return $this->sellStartingTime;
    }

    /**
     * @param int $sellStartingTime
     * @return Allegro_Web_Api_DoSellSomeAgainRequest
     */
    public function setSellStartingTime($sellStartingTime)
    {
        $this->sellStartingTime = $sellStartingTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellAuctionDuration()
    {
        return $this->sellAuctionDuration;
    }

    /**
     * @param int $sellAuctionDuration
     * @return Allegro_Web_Api_DoSellSomeAgainRequest
     */
    public function setSellAuctionDuration($sellAuctionDuration)
    {
        $this->sellAuctionDuration = $sellAuctionDuration;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellOptions()
    {
        return $this->sellOptions;
    }

    /**
     * @param int $sellOptions
     * @return Allegro_Web_Api_DoSellSomeAgainRequest
     */
    public function setSellOptions($sellOptions)
    {
        $this->sellOptions = $sellOptions;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfInt
     */
    public function getLocalIds()
    {
        return $this->localIds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfInt $localIds
     * @return Allegro_Web_Api_DoSellSomeAgainRequest
     */
    public function setLocalIds($localIds)
    {
        $this->localIds = $localIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellProlongOptions()
    {
        return $this->sellProlongOptions;
    }

    /**
     * @param int $sellProlongOptions
     * @return Allegro_Web_Api_DoSellSomeAgainRequest
     */
    public function setSellProlongOptions($sellProlongOptions)
    {
        $this->sellProlongOptions = $sellProlongOptions;
        return $this;
    }
}
