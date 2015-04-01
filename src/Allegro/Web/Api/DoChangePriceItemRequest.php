<?php

/**
 * Class Allegro_Web_Api_DoChangePriceItemRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoChangePriceItemRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var float $newStartingPrice
     */
    protected $newStartingPrice = null;

    /**
     * @var float $newReservePrice
     */
    protected $newReservePrice = null;

    /**
     * @var float $newBuyNowPrice
     */
    protected $newBuyNowPrice = null;

    /**
     * @param string $sessionHandle
     * @param int $itemId
     * @param float $newStartingPrice
     * @param float $newReservePrice
     * @param float $newBuyNowPrice
     */
    public function __construct($sessionHandle, $itemId, $newStartingPrice, $newReservePrice, $newBuyNowPrice)
    {
        $this->sessionHandle = $sessionHandle;
        $this->itemId = $itemId;
        $this->newStartingPrice = $newStartingPrice;
        $this->newReservePrice = $newReservePrice;
        $this->newBuyNowPrice = $newBuyNowPrice;
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
     * @return Allegro_Web_Api_DoChangePriceItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
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
     * @return Allegro_Web_Api_DoChangePriceItemRequest
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return float
     */
    public function getNewStartingPrice()
    {
        return $this->newStartingPrice;
    }

    /**
     * @param float $newStartingPrice
     * @return Allegro_Web_Api_DoChangePriceItemRequest
     */
    public function setNewStartingPrice($newStartingPrice)
    {
        $this->newStartingPrice = $newStartingPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getNewReservePrice()
    {
        return $this->newReservePrice;
    }

    /**
     * @param float $newReservePrice
     * @return Allegro_Web_Api_DoChangePriceItemRequest
     */
    public function setNewReservePrice($newReservePrice)
    {
        $this->newReservePrice = $newReservePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getNewBuyNowPrice()
    {
        return $this->newBuyNowPrice;
    }

    /**
     * @param float $newBuyNowPrice
     * @return Allegro_Web_Api_DoChangePriceItemRequest
     */
    public function setNewBuyNowPrice($newBuyNowPrice)
    {
        $this->newBuyNowPrice = $newBuyNowPrice;
        return $this;
    }
}
