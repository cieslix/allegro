<?php

/**
 * Class Allegro_Web_Api_UserItemList
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_UserItemList extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itId
     */
    protected $itId = null;

    /**
     * @var string $itName
     */
    protected $itName = null;

    /**
     * @var float $itPrice
     */
    protected $itPrice = null;

    /**
     * @var float $itBuyNowPrice
     */
    protected $itBuyNowPrice = null;

    /**
     * @var int $itBidCount
     */
    protected $itBidCount = null;

    /**
     * @var int $itTimeLeft
     */
    protected $itTimeLeft = null;

    /**
     * @var int $itFotoCount
     */
    protected $itFotoCount = null;

    /**
     * @var int $itIsListingThumb
     */
    protected $itIsListingThumb = null;

    /**
     * @var int $itIsBoldTitle
     */
    protected $itIsBoldTitle = null;

    /**
     * @var int $itIsBuyNow
     */
    protected $itIsBuyNow = null;

    /**
     * @var int $itCountry
     */
    protected $itCountry = null;

    /**
     * @var int $itIsEscrow
     */
    protected $itIsEscrow = null;

    /**
     * @var int $itStartingTime
     */
    protected $itStartingTime = null;

    /**
     * @var int $itIsReservedPrice
     */
    protected $itIsReservedPrice = null;

    /**
     * @var string $itThumbUrl
     */
    protected $itThumbUrl = null;

    /**
     * @var int $itIsAllegroStandard
     */
    protected $itIsAllegroStandard = null;

    /**
     * @var int $itHasFreeShipping
     */
    protected $itHasFreeShipping = null;

    /**
     * @var int $itEndingTime
     */
    protected $itEndingTime = null;

    /**
     * @param int    $itId
     * @param string $itName
     * @param float  $itPrice
     * @param float  $itBuyNowPrice
     * @param int    $itBidCount
     * @param int    $itTimeLeft
     * @param int    $itFotoCount
     * @param int    $itIsListingThumb
     * @param int    $itIsBoldTitle
     * @param int    $itIsBuyNow
     * @param int    $itCountry
     * @param int    $itIsEscrow
     * @param int    $itStartingTime
     * @param int    $itIsReservedPrice
     * @param string $itThumbUrl
     * @param int    $itIsAllegroStandard
     * @param int    $itHasFreeShipping
     * @param int    $itEndingTime
     */
    public function __construct($itId, $itName, $itPrice, $itBuyNowPrice, $itBidCount, $itTimeLeft, $itFotoCount, $itIsListingThumb, $itIsBoldTitle, $itIsBuyNow, $itCountry, $itIsEscrow, $itStartingTime, $itIsReservedPrice, $itThumbUrl, $itIsAllegroStandard, $itHasFreeShipping, $itEndingTime)
    {
        $this->itId                = $itId;
        $this->itName              = $itName;
        $this->itPrice             = $itPrice;
        $this->itBuyNowPrice       = $itBuyNowPrice;
        $this->itBidCount          = $itBidCount;
        $this->itTimeLeft          = $itTimeLeft;
        $this->itFotoCount         = $itFotoCount;
        $this->itIsListingThumb    = $itIsListingThumb;
        $this->itIsBoldTitle       = $itIsBoldTitle;
        $this->itIsBuyNow          = $itIsBuyNow;
        $this->itCountry           = $itCountry;
        $this->itIsEscrow          = $itIsEscrow;
        $this->itStartingTime      = $itStartingTime;
        $this->itIsReservedPrice   = $itIsReservedPrice;
        $this->itThumbUrl          = $itThumbUrl;
        $this->itIsAllegroStandard = $itIsAllegroStandard;
        $this->itHasFreeShipping   = $itHasFreeShipping;
        $this->itEndingTime        = $itEndingTime;
    }

    /**
     * @return int
     */
    public function getItId()
    {
        return $this->itId;
    }

    /**
     * @param int $itId
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItId($itId)
    {
        $this->itId = $itId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItName()
    {
        return $this->itName;
    }

    /**
     * @param string $itName
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItName($itName)
    {
        $this->itName = $itName;
        return $this;
    }

    /**
     * @return float
     */
    public function getItPrice()
    {
        return $this->itPrice;
    }

    /**
     * @param float $itPrice
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItPrice($itPrice)
    {
        $this->itPrice = $itPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getItBuyNowPrice()
    {
        return $this->itBuyNowPrice;
    }

    /**
     * @param float $itBuyNowPrice
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItBuyNowPrice($itBuyNowPrice)
    {
        $this->itBuyNowPrice = $itBuyNowPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getItBidCount()
    {
        return $this->itBidCount;
    }

    /**
     * @param int $itBidCount
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItBidCount($itBidCount)
    {
        $this->itBidCount = $itBidCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getItTimeLeft()
    {
        return $this->itTimeLeft;
    }

    /**
     * @param int $itTimeLeft
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItTimeLeft($itTimeLeft)
    {
        $this->itTimeLeft = $itTimeLeft;
        return $this;
    }

    /**
     * @return int
     */
    public function getItFotoCount()
    {
        return $this->itFotoCount;
    }

    /**
     * @param int $itFotoCount
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItFotoCount($itFotoCount)
    {
        $this->itFotoCount = $itFotoCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getItIsListingThumb()
    {
        return $this->itIsListingThumb;
    }

    /**
     * @param int $itIsListingThumb
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItIsListingThumb($itIsListingThumb)
    {
        $this->itIsListingThumb = $itIsListingThumb;
        return $this;
    }

    /**
     * @return int
     */
    public function getItIsBoldTitle()
    {
        return $this->itIsBoldTitle;
    }

    /**
     * @param int $itIsBoldTitle
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItIsBoldTitle($itIsBoldTitle)
    {
        $this->itIsBoldTitle = $itIsBoldTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getItIsBuyNow()
    {
        return $this->itIsBuyNow;
    }

    /**
     * @param int $itIsBuyNow
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItIsBuyNow($itIsBuyNow)
    {
        $this->itIsBuyNow = $itIsBuyNow;
        return $this;
    }

    /**
     * @return int
     */
    public function getItCountry()
    {
        return $this->itCountry;
    }

    /**
     * @param int $itCountry
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItCountry($itCountry)
    {
        $this->itCountry = $itCountry;
        return $this;
    }

    /**
     * @return int
     */
    public function getItIsEscrow()
    {
        return $this->itIsEscrow;
    }

    /**
     * @param int $itIsEscrow
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItIsEscrow($itIsEscrow)
    {
        $this->itIsEscrow = $itIsEscrow;
        return $this;
    }

    /**
     * @return int
     */
    public function getItStartingTime()
    {
        return $this->itStartingTime;
    }

    /**
     * @param int $itStartingTime
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItStartingTime($itStartingTime)
    {
        $this->itStartingTime = $itStartingTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getItIsReservedPrice()
    {
        return $this->itIsReservedPrice;
    }

    /**
     * @param int $itIsReservedPrice
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItIsReservedPrice($itIsReservedPrice)
    {
        $this->itIsReservedPrice = $itIsReservedPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getItThumbUrl()
    {
        return $this->itThumbUrl;
    }

    /**
     * @param string $itThumbUrl
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItThumbUrl($itThumbUrl)
    {
        $this->itThumbUrl = $itThumbUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getItIsAllegroStandard()
    {
        return $this->itIsAllegroStandard;
    }

    /**
     * @param int $itIsAllegroStandard
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItIsAllegroStandard($itIsAllegroStandard)
    {
        $this->itIsAllegroStandard = $itIsAllegroStandard;
        return $this;
    }

    /**
     * @return int
     */
    public function getItHasFreeShipping()
    {
        return $this->itHasFreeShipping;
    }

    /**
     * @param int $itHasFreeShipping
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItHasFreeShipping($itHasFreeShipping)
    {
        $this->itHasFreeShipping = $itHasFreeShipping;
        return $this;
    }

    /**
     * @return int
     */
    public function getItEndingTime()
    {
        return $this->itEndingTime;
    }

    /**
     * @param int $itEndingTime
     * @return Allegro_Web_Api_UserItemList
     */
    public function setItEndingTime($itEndingTime)
    {
        $this->itEndingTime = $itEndingTime;
        return $this;
    }
}
