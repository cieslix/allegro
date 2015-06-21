<?php

/**
 * Class Allegro_Web_Api_DoSellSomeAgainInShopRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSellSomeAgainInShopRequest extends Allegro_Web_Api_Abstract
{
    const AUCTION_DURATION_30DAYS = 30;

    const OPTION_REMOVE_SOURCE      = 1;
    const OPTION_SEND_CONFIRM_EMAIL = 2;
    const OPTION_BOTH               = 3;

    const PROLONG_OPTION_DISABLED = 0;
    const PROLONG_OPTION_ALL      = 1;
    const PROLONG_OPTION_NOT_SOLD = 2;

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
     * @var int $sellShopDuration
     */
    protected $sellShopDuration = null;

    /**
     * @var int $sellShopOptions
     */
    protected $sellShopOptions = null;

    /**
     * @var int $sellProlongOptions
     */
    protected $sellProlongOptions = null;

    /**
     * @var int $sellShopCategory
     */
    protected $sellShopCategory = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInt $localIds
     */
    protected $localIds = null;

    /**
     * @param string                      $sessionHandle
     * @param Allegro_Web_Api_ArrayOfLong $sellItemsArray
     * @param int                         $sellStartingTime
     * @param int                         $sellShopDuration
     * @param int                         $sellShopOptions
     * @param int                         $sellProlongOptions
     * @param int                         $sellShopCategory
     * @param Allegro_Web_Api_ArrayOfInt  $localIds
     */
    public function __construct($sessionHandle, $sellItemsArray, $sellStartingTime, $sellShopDuration, $sellShopOptions, $sellProlongOptions, $sellShopCategory, $localIds)
    {
        $this->sessionHandle      = $sessionHandle;
        $this->sellItemsArray     = $sellItemsArray;
        $this->sellStartingTime   = $sellStartingTime;
        $this->sellShopDuration   = $sellShopDuration;
        $this->sellShopOptions    = $sellShopOptions;
        $this->sellProlongOptions = $sellProlongOptions;
        $this->sellShopCategory   = $sellShopCategory;
        $this->localIds           = $localIds;
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
     * @return Allegro_Web_Api_DoSellSomeAgainInShopRequest
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
     * @return Allegro_Web_Api_DoSellSomeAgainInShopRequest
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
     * @return Allegro_Web_Api_DoSellSomeAgainInShopRequest
     */
    public function setSellStartingTime($sellStartingTime)
    {
        $this->sellStartingTime = $sellStartingTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellShopDuration()
    {
        return $this->sellShopDuration;
    }

    /**
     * @param int $sellShopDuration
     * @return Allegro_Web_Api_DoSellSomeAgainInShopRequest
     */
    public function setSellShopDuration($sellShopDuration)
    {
        $this->sellShopDuration = $sellShopDuration;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellShopOptions()
    {
        return $this->sellShopOptions;
    }

    /**
     * @param int $sellShopOptions
     * @return Allegro_Web_Api_DoSellSomeAgainInShopRequest
     */
    public function setSellShopOptions($sellShopOptions)
    {
        $this->sellShopOptions = $sellShopOptions;
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
     * @return Allegro_Web_Api_DoSellSomeAgainInShopRequest
     */
    public function setSellProlongOptions($sellProlongOptions)
    {
        $this->sellProlongOptions = $sellProlongOptions;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellShopCategory()
    {
        return $this->sellShopCategory;
    }

    /**
     * @param int $sellShopCategory
     * @return Allegro_Web_Api_DoSellSomeAgainInShopRequest
     */
    public function setSellShopCategory($sellShopCategory)
    {
        $this->sellShopCategory = $sellShopCategory;
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
     * @return Allegro_Web_Api_DoSellSomeAgainInShopRequest
     */
    public function setLocalIds($localIds)
    {
        $this->localIds = $localIds;
        return $this;
    }
}
