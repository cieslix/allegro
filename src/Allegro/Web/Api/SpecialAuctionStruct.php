<?php

/**
 * Class Allegro_Web_Api_SpecialAuctionStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SpecialAuctionStruct extends Allegro_Web_Api_Abstract
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
     * @var int $itFotoCount
     */
    protected $itFotoCount = null;

    /**
     * @var int $itTimeLeft
     */
    protected $itTimeLeft = null;

    /**
     * @var int $itEndingTime
     */
    protected $itEndingTime = null;

    /**
     * @var int $itCountry
     */
    protected $itCountry = null;

    /**
     * @var int $itIsListingThumb
     */
    protected $itIsListingThumb = null;

    /**
     * @var int $itIsEscrow
     */
    protected $itIsEscrow = null;

    /**
     * @var int $itSellerId
     */
    protected $itSellerId = null;

    /**
     * @var float $itSendCostPrice
     */
    protected $itSendCostPrice = null;

    /**
     * @var int $itIsBoldTitle
     */
    protected $itIsBoldTitle = null;

    /**
     * @var int $itStartingTime
     */
    protected $itStartingTime = null;

    /**
     * @var int $itIsAllegroStandard
     */
    protected $itIsAllegroStandard = null;

    /**
     * @var int $itHasFreeShipping
     */
    protected $itHasFreeShipping = null;

    /**
     * @var Allegro_Web_Api_ArrayOfAttribstruct $itAttribsList
     */
    protected $itAttribsList = null;

    /**
     * @param int $itId
     * @param string $itName
     * @param float $itPrice
     * @param float $itBuyNowPrice
     * @param int $itBidCount
     * @param int $itFotoCount
     * @param int $itTimeLeft
     * @param int $itEndingTime
     * @param int $itCountry
     * @param int $itIsListingThumb
     * @param int $itIsEscrow
     * @param int $itSellerId
     * @param float $itSendCostPrice
     * @param int $itIsBoldTitle
     * @param int $itStartingTime
     * @param int $itIsAllegroStandard
     * @param int $itHasFreeShipping
     * @param Allegro_Web_Api_ArrayOfAttribstruct $itAttribsList
     */
    public function __construct($itId, $itName, $itPrice, $itBuyNowPrice, $itBidCount, $itFotoCount, $itTimeLeft, $itEndingTime, $itCountry, $itIsListingThumb, $itIsEscrow, $itSellerId, $itSendCostPrice, $itIsBoldTitle, $itStartingTime, $itIsAllegroStandard, $itHasFreeShipping, $itAttribsList)
    {
        $this->itId = $itId;
        $this->itName = $itName;
        $this->itPrice = $itPrice;
        $this->itBuyNowPrice = $itBuyNowPrice;
        $this->itBidCount = $itBidCount;
        $this->itFotoCount = $itFotoCount;
        $this->itTimeLeft = $itTimeLeft;
        $this->itEndingTime = $itEndingTime;
        $this->itCountry = $itCountry;
        $this->itIsListingThumb = $itIsListingThumb;
        $this->itIsEscrow = $itIsEscrow;
        $this->itSellerId = $itSellerId;
        $this->itSendCostPrice = $itSendCostPrice;
        $this->itIsBoldTitle = $itIsBoldTitle;
        $this->itStartingTime = $itStartingTime;
        $this->itIsAllegroStandard = $itIsAllegroStandard;
        $this->itHasFreeShipping = $itHasFreeShipping;
        $this->itAttribsList = $itAttribsList;
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItBidCount($itBidCount)
    {
        $this->itBidCount = $itBidCount;
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItFotoCount($itFotoCount)
    {
        $this->itFotoCount = $itFotoCount;
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItTimeLeft($itTimeLeft)
    {
        $this->itTimeLeft = $itTimeLeft;
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItEndingTime($itEndingTime)
    {
        $this->itEndingTime = $itEndingTime;
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItCountry($itCountry)
    {
        $this->itCountry = $itCountry;
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItIsListingThumb($itIsListingThumb)
    {
        $this->itIsListingThumb = $itIsListingThumb;
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItIsEscrow($itIsEscrow)
    {
        $this->itIsEscrow = $itIsEscrow;
        return $this;
    }

    /**
     * @return int
     */
    public function getItSellerId()
    {
        return $this->itSellerId;
    }

    /**
     * @param int $itSellerId
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItSellerId($itSellerId)
    {
        $this->itSellerId = $itSellerId;
        return $this;
    }

    /**
     * @return float
     */
    public function getItSendCostPrice()
    {
        return $this->itSendCostPrice;
    }

    /**
     * @param float $itSendCostPrice
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItSendCostPrice($itSendCostPrice)
    {
        $this->itSendCostPrice = $itSendCostPrice;
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItIsBoldTitle($itIsBoldTitle)
    {
        $this->itIsBoldTitle = $itIsBoldTitle;
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItStartingTime($itStartingTime)
    {
        $this->itStartingTime = $itStartingTime;
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
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
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItHasFreeShipping($itHasFreeShipping)
    {
        $this->itHasFreeShipping = $itHasFreeShipping;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfAttribstruct
     */
    public function getItAttribsList()
    {
        return $this->itAttribsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfAttribstruct $itAttribsList
     * @return Allegro_Web_Api_SpecialAuctionStruct
     */
    public function setItAttribsList($itAttribsList)
    {
        $this->itAttribsList = $itAttribsList;
        return $this;
    }
}
