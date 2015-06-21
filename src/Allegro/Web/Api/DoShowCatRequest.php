<?php

/**
 * Class Allegro_Web_Api_DoShowCatRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoShowCatRequest extends Allegro_Web_Api_Abstract
{
    const OPTION_BUY_NOW               = 1;
    const OPTION_ADS_TYPE              = 2;
    const OPTION_ONLY_BIDDING_TYPE     = 4;
    const OPTION_PERSONAL_PICKUP       = 8;
    const OPTION_WITH_INVOICE          = 16;
    const OPTION_SUPPORT_PLANET        = 32;
    const OPTION_AVAILABLE_FOR_GUESTS  = 64;
    const OPTION_IN_GENERAL_AVAILABLE  = 128;
    const OPTION_STANDARD_ALLEGRO      = 256;
    const OPTION_FREE_DELIVERY         = 512;
    const OPTION_DELIVERY_NOVAYAPOCHTA = 1024;
    const OPTION_NEW_CONDITION         = 2048;
    const OPTION_USED_CONDITION        = 4096;

    const SORT_BY_ENDING_ASC      = 1;
    const SORT_BY_ENDING_DESC     = 2;
    const SORT_BY_NAME_ASC        = 3;
    const SORT_BY_NAME_DESC       = 4;
    const SORT_BY_PRICE_ASC       = 5;
    const SORT_BY_PRICE_DESC      = 6;
    const SORT_BY_OFFERS_NUM_ASC  = 7;
    const SORT_BY_OFFERS_NUM_DESC = 8;
    const SORT_BY_RELEVANCE_DESC  = 16;

    const FULFILLMENT_TIME_NOW  = 1;
    const FULFILLMENT_TIME_24   = 24;
    const FULFILLMENT_TIME_48   = 48;
    const FULFILLMENT_TIME_72   = 72;
    const FULFILLMENT_TIME_96   = 96;
    const FULFILLMENT_TIME_120  = 120;
    const FULFILLMENT_TIME_168  = 168;
    const FULFILLMENT_TIME_240  = 240;
    const FULFILLMENT_TIME_336  = 336;
    const FULFILLMENT_TIME_504  = 504;
    const FULFILLMENT_TIME_MORE = 999;

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $catId
     */
    protected $catId = null;

    /**
     * @var int $catItemState
     */
    protected $catItemState = null;

    /**
     * @var int $catItemOption
     */
    protected $catItemOption = null;

    /**
     * @var Allegro_Web_Api_DurationTimeInfo $catItemDurationOption
     */
    protected $catItemDurationOption = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFieldsvalue $catAttribFields
     */
    protected $catAttribFields = null;

    /**
     * @var int $catSortOptions
     */
    protected $catSortOptions = null;

    /**
     * @var Allegro_Web_Api_PriceCatInfo $catItemsPrice
     */
    protected $catItemsPrice = null;

    /**
     * @var int $catItemsOffset
     */
    protected $catItemsOffset = null;

    /**
     * @var int $catItemsLimit
     */
    protected $catItemsLimit = null;

    /**
     * @var int $catOrderFulfillmentTime
     */
    protected $catOrderFulfillmentTime = null;

    /**
     * @param string                             $sessionHandle
     * @param int                                $catId
     * @param int                                $catItemState
     * @param int                                $catItemOption
     * @param Allegro_Web_Api_DurationTimeInfo   $catItemDurationOption
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $catAttribFields
     * @param int                                $catSortOptions
     * @param Allegro_Web_Api_PriceCatInfo       $catItemsPrice
     * @param int                                $catItemsOffset
     * @param int                                $catItemsLimit
     * @param int                                $catOrderFulfillmentTime
     */
    public function __construct($sessionHandle, $catId, $catItemState, $catItemOption, $catItemDurationOption, $catAttribFields, $catSortOptions, $catItemsPrice, $catItemsOffset, $catItemsLimit, $catOrderFulfillmentTime)
    {
        $this->sessionHandle           = $sessionHandle;
        $this->catId                   = $catId;
        $this->catItemState            = $catItemState;
        $this->catItemOption           = $catItemOption;
        $this->catItemDurationOption   = $catItemDurationOption;
        $this->catAttribFields         = $catAttribFields;
        $this->catSortOptions          = $catSortOptions;
        $this->catItemsPrice           = $catItemsPrice;
        $this->catItemsOffset          = $catItemsOffset;
        $this->catItemsLimit           = $catItemsLimit;
        $this->catOrderFulfillmentTime = $catOrderFulfillmentTime;
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
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * @param int $catId
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatItemState()
    {
        return $this->catItemState;
    }

    /**
     * @param int $catItemState
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setCatItemState($catItemState)
    {
        $this->catItemState = $catItemState;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatItemOption()
    {
        return $this->catItemOption;
    }

    /**
     * @param int $catItemOption
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setCatItemOption($catItemOption)
    {
        $this->catItemOption = $catItemOption;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_DurationTimeInfo
     */
    public function getCatItemDurationOption()
    {
        return $this->catItemDurationOption;
    }

    /**
     * @param Allegro_Web_Api_DurationTimeInfo $catItemDurationOption
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setCatItemDurationOption($catItemDurationOption)
    {
        $this->catItemDurationOption = $catItemDurationOption;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFieldsvalue
     */
    public function getCatAttribFields()
    {
        return $this->catAttribFields;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $catAttribFields
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setCatAttribFields($catAttribFields)
    {
        $this->catAttribFields = $catAttribFields;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatSortOptions()
    {
        return $this->catSortOptions;
    }

    /**
     * @param int $catSortOptions
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setCatSortOptions($catSortOptions)
    {
        $this->catSortOptions = $catSortOptions;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PriceCatInfo
     */
    public function getCatItemsPrice()
    {
        return $this->catItemsPrice;
    }

    /**
     * @param Allegro_Web_Api_PriceCatInfo $catItemsPrice
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setCatItemsPrice($catItemsPrice)
    {
        $this->catItemsPrice = $catItemsPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatItemsOffset()
    {
        return $this->catItemsOffset;
    }

    /**
     * @param int $catItemsOffset
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setCatItemsOffset($catItemsOffset)
    {
        $this->catItemsOffset = $catItemsOffset;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatItemsLimit()
    {
        return $this->catItemsLimit;
    }

    /**
     * @param int $catItemsLimit
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setCatItemsLimit($catItemsLimit)
    {
        $this->catItemsLimit = $catItemsLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatOrderFulfillmentTime()
    {
        return $this->catOrderFulfillmentTime;
    }

    /**
     * @param int $catOrderFulfillmentTime
     * @return Allegro_Web_Api_DoShowCatRequest
     */
    public function setCatOrderFulfillmentTime($catOrderFulfillmentTime)
    {
        $this->catOrderFulfillmentTime = $catOrderFulfillmentTime;
        return $this;
    }
}
