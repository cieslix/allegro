<?php

/**
 * Class Allegro_Web_Api_NotWonItemStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_NotWonItemStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemTitle
     */
    protected $itemTitle = null;

    /**
     * @var string $itemThumbnailUrl
     */
    protected $itemThumbnailUrl = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItempricestruct $itemPrice
     */
    protected $itemPrice = null;

    /**
     * @var int $itemLeftQuantity
     */
    protected $itemLeftQuantity = null;

    /**
     * @var int $itemQuantityType
     */
    protected $itemQuantityType = null;

    /**
     * @var int $itemEndTime
     */
    protected $itemEndTime = null;

    /**
     * @var string $itemEndTimeLeft
     */
    protected $itemEndTimeLeft = null;

    /**
     * @var Allegro_Web_Api_UserInfoStruct $itemSeller
     */
    protected $itemSeller = null;

    /**
     * @var int $itemBiddersCounter
     */
    protected $itemBiddersCounter = null;

    /**
     * @var Allegro_Web_Api_UserInfoStruct $itemHighestBidder
     */
    protected $itemHighestBidder = null;

    /**
     * @var int $itemCategoryId
     */
    protected $itemCategoryId = null;

    /**
     * @var int $itemViewsCounter
     */
    protected $itemViewsCounter = null;

    /**
     * @var string $itemNote
     */
    protected $itemNote = null;

    /**
     * @var int $itemSpecialInfo
     */
    protected $itemSpecialInfo = null;

    /**
     * @var int $itemShopInfo
     */
    protected $itemShopInfo = null;

    /**
     * @var int $itemProductInfo
     */
    protected $itemProductInfo = null;

    /**
     * @var int $itemPayuInfo
     */
    protected $itemPayuInfo = null;

    /**
     * @param int $itemId
     * @param string $itemTitle
     * @param string $itemThumbnailUrl
     * @param Allegro_Web_Api_ArrayOfItempricestruct $itemPrice
     * @param int $itemLeftQuantity
     * @param int $itemQuantityType
     * @param int $itemEndTime
     * @param string $itemEndTimeLeft
     * @param Allegro_Web_Api_UserInfoStruct $itemSeller
     * @param int $itemBiddersCounter
     * @param Allegro_Web_Api_UserInfoStruct $itemHighestBidder
     * @param int $itemCategoryId
     * @param int $itemViewsCounter
     * @param string $itemNote
     * @param int $itemSpecialInfo
     * @param int $itemShopInfo
     * @param int $itemProductInfo
     * @param int $itemPayuInfo
     */
    public function __construct($itemId, $itemTitle, $itemThumbnailUrl, $itemPrice, $itemLeftQuantity, $itemQuantityType, $itemEndTime, $itemEndTimeLeft, $itemSeller, $itemBiddersCounter, $itemHighestBidder, $itemCategoryId, $itemViewsCounter, $itemNote, $itemSpecialInfo, $itemShopInfo, $itemProductInfo, $itemPayuInfo)
    {
        $this->itemId = $itemId;
        $this->itemTitle = $itemTitle;
        $this->itemThumbnailUrl = $itemThumbnailUrl;
        $this->itemPrice = $itemPrice;
        $this->itemLeftQuantity = $itemLeftQuantity;
        $this->itemQuantityType = $itemQuantityType;
        $this->itemEndTime = $itemEndTime;
        $this->itemEndTimeLeft = $itemEndTimeLeft;
        $this->itemSeller = $itemSeller;
        $this->itemBiddersCounter = $itemBiddersCounter;
        $this->itemHighestBidder = $itemHighestBidder;
        $this->itemCategoryId = $itemCategoryId;
        $this->itemViewsCounter = $itemViewsCounter;
        $this->itemNote = $itemNote;
        $this->itemSpecialInfo = $itemSpecialInfo;
        $this->itemShopInfo = $itemShopInfo;
        $this->itemProductInfo = $itemProductInfo;
        $this->itemPayuInfo = $itemPayuInfo;
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
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * @param string $itemTitle
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemThumbnailUrl()
    {
        return $this->itemThumbnailUrl;
    }

    /**
     * @param string $itemThumbnailUrl
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemThumbnailUrl($itemThumbnailUrl)
    {
        $this->itemThumbnailUrl = $itemThumbnailUrl;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItempricestruct
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItempricestruct $itemPrice
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemLeftQuantity()
    {
        return $this->itemLeftQuantity;
    }

    /**
     * @param int $itemLeftQuantity
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemLeftQuantity($itemLeftQuantity)
    {
        $this->itemLeftQuantity = $itemLeftQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemQuantityType()
    {
        return $this->itemQuantityType;
    }

    /**
     * @param int $itemQuantityType
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemQuantityType($itemQuantityType)
    {
        $this->itemQuantityType = $itemQuantityType;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemEndTime()
    {
        return $this->itemEndTime;
    }

    /**
     * @param int $itemEndTime
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemEndTime($itemEndTime)
    {
        $this->itemEndTime = $itemEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemEndTimeLeft()
    {
        return $this->itemEndTimeLeft;
    }

    /**
     * @param string $itemEndTimeLeft
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemEndTimeLeft($itemEndTimeLeft)
    {
        $this->itemEndTimeLeft = $itemEndTimeLeft;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_UserInfoStruct
     */
    public function getItemSeller()
    {
        return $this->itemSeller;
    }

    /**
     * @param Allegro_Web_Api_UserInfoStruct $itemSeller
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemSeller($itemSeller)
    {
        $this->itemSeller = $itemSeller;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemBiddersCounter()
    {
        return $this->itemBiddersCounter;
    }

    /**
     * @param int $itemBiddersCounter
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemBiddersCounter($itemBiddersCounter)
    {
        $this->itemBiddersCounter = $itemBiddersCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_UserInfoStruct
     */
    public function getItemHighestBidder()
    {
        return $this->itemHighestBidder;
    }

    /**
     * @param Allegro_Web_Api_UserInfoStruct $itemHighestBidder
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemHighestBidder($itemHighestBidder)
    {
        $this->itemHighestBidder = $itemHighestBidder;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemCategoryId()
    {
        return $this->itemCategoryId;
    }

    /**
     * @param int $itemCategoryId
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemCategoryId($itemCategoryId)
    {
        $this->itemCategoryId = $itemCategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemViewsCounter()
    {
        return $this->itemViewsCounter;
    }

    /**
     * @param int $itemViewsCounter
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemViewsCounter($itemViewsCounter)
    {
        $this->itemViewsCounter = $itemViewsCounter;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemNote()
    {
        return $this->itemNote;
    }

    /**
     * @param string $itemNote
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemNote($itemNote)
    {
        $this->itemNote = $itemNote;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemSpecialInfo()
    {
        return $this->itemSpecialInfo;
    }

    /**
     * @param int $itemSpecialInfo
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemSpecialInfo($itemSpecialInfo)
    {
        $this->itemSpecialInfo = $itemSpecialInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemShopInfo()
    {
        return $this->itemShopInfo;
    }

    /**
     * @param int $itemShopInfo
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemShopInfo($itemShopInfo)
    {
        $this->itemShopInfo = $itemShopInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemProductInfo()
    {
        return $this->itemProductInfo;
    }

    /**
     * @param int $itemProductInfo
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemProductInfo($itemProductInfo)
    {
        $this->itemProductInfo = $itemProductInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemPayuInfo()
    {
        return $this->itemPayuInfo;
    }

    /**
     * @param int $itemPayuInfo
     * @return Allegro_Web_Api_NotWonItemStruct
     */
    public function setItemPayuInfo($itemPayuInfo)
    {
        $this->itemPayuInfo = $itemPayuInfo;
        return $this;
    }
}
