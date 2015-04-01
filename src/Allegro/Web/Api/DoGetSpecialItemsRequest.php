<?php

/**
 * Class Allegro_Web_Api_DoGetSpecialItemsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSpecialItemsRequest extends Allegro_Web_Api_Abstract
{
    const SPECIAL_TYPE_NEWEST_1000 = 0;
    const SPECIAL_TYPE_COMING_TO_END = 1;
    const SPECIAL_TYPE_MAIN_PAGE = 2;
    const SPECIAL_TYPE_CATEGORY_PAGE = 3;

    const FULFILLMENT_TIME_NOW = 1;
    const FULFILLMENT_TIME_24 = 24;
    const FULFILLMENT_TIME_48 = 48;
    const FULFILLMENT_TIME_72 = 72;
    const FULFILLMENT_TIME_96 = 96;
    const FULFILLMENT_TIME_120 = 120;
    const FULFILLMENT_TIME_168 = 168;
    const FULFILLMENT_TIME_240 = 240;
    const FULFILLMENT_TIME_336 = 336;
    const FULFILLMENT_TIME_504 = 504;
    const FULFILLMENT_TIME_MORE = 999;
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $specialType
     */
    protected $specialType = null;

    /**
     * @var int $specialGroup
     */
    protected $specialGroup = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $orderFulfillmentTime
     */
    protected $orderFulfillmentTime = null;

    /**
     * @param string $sessionHandle
     * @param int $specialType
     * @param int $specialGroup
     * @param int $offset
     * @param int $orderFulfillmentTime
     */
    public function __construct($sessionHandle, $specialType, $specialGroup, $offset, $orderFulfillmentTime)
    {
        $this->sessionHandle = $sessionHandle;
        $this->specialType = $specialType;
        $this->specialGroup = $specialGroup;
        $this->offset = $offset;
        $this->orderFulfillmentTime = $orderFulfillmentTime;
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
     * @return Allegro_Web_Api_DoGetSpecialItemsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpecialType()
    {
        return $this->specialType;
    }

    /**
     * @param int $specialType
     * @return Allegro_Web_Api_DoGetSpecialItemsRequest
     */
    public function setSpecialType($specialType)
    {
        $this->specialType = $specialType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpecialGroup()
    {
        return $this->specialGroup;
    }

    /**
     * @param int $specialGroup
     * @return Allegro_Web_Api_DoGetSpecialItemsRequest
     */
    public function setSpecialGroup($specialGroup)
    {
        $this->specialGroup = $specialGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return Allegro_Web_Api_DoGetSpecialItemsRequest
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderFulfillmentTime()
    {
        return $this->orderFulfillmentTime;
    }

    /**
     * @param int $orderFulfillmentTime
     * @return Allegro_Web_Api_DoGetSpecialItemsRequest
     */
    public function setOrderFulfillmentTime($orderFulfillmentTime)
    {
        $this->orderFulfillmentTime = $orderFulfillmentTime;
        return $this;
    }
}
