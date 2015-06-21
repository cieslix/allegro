<?php

/**
 * Class Allegro_Web_Api_SearchResponseType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SearchResponseType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sItId
     */
    protected $sItId = null;

    /**
     * @var string $sItName
     */
    protected $sItName = null;

    /**
     * @var float $sItPrice
     */
    protected $sItPrice = null;

    /**
     * @var float $sItStartingPrice
     */
    protected $sItStartingPrice = null;

    /**
     * @var int $sItIsBuyNow
     */
    protected $sItIsBuyNow = null;

    /**
     * @var float $sItBuyNowPrice
     */
    protected $sItBuyNowPrice = null;

    /**
     * @var int $sItBidCount
     */
    protected $sItBidCount = null;

    /**
     * @var int $sItFotoCount
     */
    protected $sItFotoCount = null;

    /**
     * @var int $sItStartingTime
     */
    protected $sItStartingTime = null;

    /**
     * @var int $sItEndingTime
     */
    protected $sItEndingTime = null;

    /**
     * @var int $sItTimeLeft
     */
    protected $sItTimeLeft = null;

    /**
     * @var string $sItCity
     */
    protected $sItCity = null;

    /**
     * @var int $sItState
     */
    protected $sItState = null;

    /**
     * @var int $sItCountry
     */
    protected $sItCountry = null;

    /**
     * @var int $sItCategoryId
     */
    protected $sItCategoryId = null;

    /**
     * @var int $sItFeatured
     */
    protected $sItFeatured = null;

    /**
     * @var string $sItThumbUrl
     */
    protected $sItThumbUrl = null;

    /**
     * @var int $sItThumb
     */
    protected $sItThumb = null;

    /**
     * @var float $sItPostage
     */
    protected $sItPostage = null;

    /**
     * @var int $sItIsForGuests
     */
    protected $sItIsForGuests = null;

    /**
     * @var int $sItIsTablicaAdvert
     */
    protected $sItIsTablicaAdvert = null;

    /**
     * @var int $sItIsAllegroStandard
     */
    protected $sItIsAllegroStandard = null;

    /**
     * @var int $sItHasFreeShipping
     */
    protected $sItHasFreeShipping = null;

    /**
     * @var int $sItInstallmentsAvailable
     */
    protected $sItInstallmentsAvailable = null;

    /**
     * @var int $sItOrderFulfillmentTime
     */
    protected $sItOrderFulfillmentTime = null;

    /**
     * @var AdvertInfoStruct $sItAdvertInfo
     */
    protected $sItAdvertInfo = null;

    /**
     * @var Allegro_Web_Api_SellerInfoStruct $sItSellerInfo
     */
    protected $sItSellerInfo = null;

    /**
     * @var Allegro_Web_Api_ArrayOfAttribstruct $sItAttribsList
     */
    protected $sItAttribsList = null;

    /**
     * @var int $sItFulfillmentTime
     */
    protected $sItFulfillmentTime = null;

    /**
     * @param int                                 $sItId
     * @param string                              $sItName
     * @param float                               $sItPrice
     * @param float                               $sItStartingPrice
     * @param int                                 $sItIsBuyNow
     * @param float                               $sItBuyNowPrice
     * @param int                                 $sItBidCount
     * @param int                                 $sItFotoCount
     * @param int                                 $sItStartingTime
     * @param int                                 $sItEndingTime
     * @param int                                 $sItTimeLeft
     * @param string                              $sItCity
     * @param int                                 $sItState
     * @param int                                 $sItCountry
     * @param int                                 $sItCategoryId
     * @param int                                 $sItFeatured
     * @param string                              $sItThumbUrl
     * @param int                                 $sItThumb
     * @param float                               $sItPostage
     * @param int                                 $sItIsForGuests
     * @param int                                 $sItIsTablicaAdvert
     * @param int                                 $sItIsAllegroStandard
     * @param int                                 $sItHasFreeShipping
     * @param int                                 $sItInstallmentsAvailable
     * @param int                                 $sItOrderFulfillmentTime
     * @param AdvertInfoStruct                    $sItAdvertInfo
     * @param Allegro_Web_Api_SellerInfoStruct    $sItSellerInfo
     * @param Allegro_Web_Api_ArrayOfAttribstruct $sItAttribsList
     * @param int                                 $sItFulfillmentTime
     */
    public function __construct($sItId, $sItName, $sItPrice, $sItStartingPrice, $sItIsBuyNow, $sItBuyNowPrice, $sItBidCount, $sItFotoCount, $sItStartingTime, $sItEndingTime, $sItTimeLeft, $sItCity, $sItState, $sItCountry, $sItCategoryId, $sItFeatured, $sItThumbUrl, $sItThumb, $sItPostage, $sItIsForGuests, $sItIsTablicaAdvert, $sItIsAllegroStandard, $sItHasFreeShipping, $sItInstallmentsAvailable, $sItOrderFulfillmentTime, $sItAdvertInfo, $sItSellerInfo, $sItAttribsList, $sItFulfillmentTime)
    {
        $this->sItId                    = $sItId;
        $this->sItName                  = $sItName;
        $this->sItPrice                 = $sItPrice;
        $this->sItStartingPrice         = $sItStartingPrice;
        $this->sItIsBuyNow              = $sItIsBuyNow;
        $this->sItBuyNowPrice           = $sItBuyNowPrice;
        $this->sItBidCount              = $sItBidCount;
        $this->sItFotoCount             = $sItFotoCount;
        $this->sItStartingTime          = $sItStartingTime;
        $this->sItEndingTime            = $sItEndingTime;
        $this->sItTimeLeft              = $sItTimeLeft;
        $this->sItCity                  = $sItCity;
        $this->sItState                 = $sItState;
        $this->sItCountry               = $sItCountry;
        $this->sItCategoryId            = $sItCategoryId;
        $this->sItFeatured              = $sItFeatured;
        $this->sItThumbUrl              = $sItThumbUrl;
        $this->sItThumb                 = $sItThumb;
        $this->sItPostage               = $sItPostage;
        $this->sItIsForGuests           = $sItIsForGuests;
        $this->sItIsTablicaAdvert       = $sItIsTablicaAdvert;
        $this->sItIsAllegroStandard     = $sItIsAllegroStandard;
        $this->sItHasFreeShipping       = $sItHasFreeShipping;
        $this->sItInstallmentsAvailable = $sItInstallmentsAvailable;
        $this->sItOrderFulfillmentTime  = $sItOrderFulfillmentTime;
        $this->sItAdvertInfo            = $sItAdvertInfo;
        $this->sItSellerInfo            = $sItSellerInfo;
        $this->sItAttribsList           = $sItAttribsList;
        $this->sItFulfillmentTime       = $sItFulfillmentTime;
    }

    /**
     * @return int
     */
    public function getSItId()
    {
        return $this->sItId;
    }

    /**
     * @param int $sItId
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItId($sItId)
    {
        $this->sItId = $sItId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSItName()
    {
        return $this->sItName;
    }

    /**
     * @param string $sItName
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItName($sItName)
    {
        $this->sItName = $sItName;
        return $this;
    }

    /**
     * @return float
     */
    public function getSItPrice()
    {
        return $this->sItPrice;
    }

    /**
     * @param float $sItPrice
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItPrice($sItPrice)
    {
        $this->sItPrice = $sItPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getSItStartingPrice()
    {
        return $this->sItStartingPrice;
    }

    /**
     * @param float $sItStartingPrice
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItStartingPrice($sItStartingPrice)
    {
        $this->sItStartingPrice = $sItStartingPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItIsBuyNow()
    {
        return $this->sItIsBuyNow;
    }

    /**
     * @param int $sItIsBuyNow
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItIsBuyNow($sItIsBuyNow)
    {
        $this->sItIsBuyNow = $sItIsBuyNow;
        return $this;
    }

    /**
     * @return float
     */
    public function getSItBuyNowPrice()
    {
        return $this->sItBuyNowPrice;
    }

    /**
     * @param float $sItBuyNowPrice
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItBuyNowPrice($sItBuyNowPrice)
    {
        $this->sItBuyNowPrice = $sItBuyNowPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItBidCount()
    {
        return $this->sItBidCount;
    }

    /**
     * @param int $sItBidCount
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItBidCount($sItBidCount)
    {
        $this->sItBidCount = $sItBidCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItFotoCount()
    {
        return $this->sItFotoCount;
    }

    /**
     * @param int $sItFotoCount
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItFotoCount($sItFotoCount)
    {
        $this->sItFotoCount = $sItFotoCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItStartingTime()
    {
        return $this->sItStartingTime;
    }

    /**
     * @param int $sItStartingTime
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItStartingTime($sItStartingTime)
    {
        $this->sItStartingTime = $sItStartingTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItEndingTime()
    {
        return $this->sItEndingTime;
    }

    /**
     * @param int $sItEndingTime
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItEndingTime($sItEndingTime)
    {
        $this->sItEndingTime = $sItEndingTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItTimeLeft()
    {
        return $this->sItTimeLeft;
    }

    /**
     * @param int $sItTimeLeft
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItTimeLeft($sItTimeLeft)
    {
        $this->sItTimeLeft = $sItTimeLeft;
        return $this;
    }

    /**
     * @return string
     */
    public function getSItCity()
    {
        return $this->sItCity;
    }

    /**
     * @param string $sItCity
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItCity($sItCity)
    {
        $this->sItCity = $sItCity;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItState()
    {
        return $this->sItState;
    }

    /**
     * @param int $sItState
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItState($sItState)
    {
        $this->sItState = $sItState;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItCountry()
    {
        return $this->sItCountry;
    }

    /**
     * @param int $sItCountry
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItCountry($sItCountry)
    {
        $this->sItCountry = $sItCountry;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItCategoryId()
    {
        return $this->sItCategoryId;
    }

    /**
     * @param int $sItCategoryId
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItCategoryId($sItCategoryId)
    {
        $this->sItCategoryId = $sItCategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItFeatured()
    {
        return $this->sItFeatured;
    }

    /**
     * @param int $sItFeatured
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItFeatured($sItFeatured)
    {
        $this->sItFeatured = $sItFeatured;
        return $this;
    }

    /**
     * @return string
     */
    public function getSItThumbUrl()
    {
        return $this->sItThumbUrl;
    }

    /**
     * @param string $sItThumbUrl
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItThumbUrl($sItThumbUrl)
    {
        $this->sItThumbUrl = $sItThumbUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItThumb()
    {
        return $this->sItThumb;
    }

    /**
     * @param int $sItThumb
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItThumb($sItThumb)
    {
        $this->sItThumb = $sItThumb;
        return $this;
    }

    /**
     * @return float
     */
    public function getSItPostage()
    {
        return $this->sItPostage;
    }

    /**
     * @param float $sItPostage
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItPostage($sItPostage)
    {
        $this->sItPostage = $sItPostage;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItIsForGuests()
    {
        return $this->sItIsForGuests;
    }

    /**
     * @param int $sItIsForGuests
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItIsForGuests($sItIsForGuests)
    {
        $this->sItIsForGuests = $sItIsForGuests;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItIsTablicaAdvert()
    {
        return $this->sItIsTablicaAdvert;
    }

    /**
     * @param int $sItIsTablicaAdvert
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItIsTablicaAdvert($sItIsTablicaAdvert)
    {
        $this->sItIsTablicaAdvert = $sItIsTablicaAdvert;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItIsAllegroStandard()
    {
        return $this->sItIsAllegroStandard;
    }

    /**
     * @param int $sItIsAllegroStandard
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItIsAllegroStandard($sItIsAllegroStandard)
    {
        $this->sItIsAllegroStandard = $sItIsAllegroStandard;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItHasFreeShipping()
    {
        return $this->sItHasFreeShipping;
    }

    /**
     * @param int $sItHasFreeShipping
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItHasFreeShipping($sItHasFreeShipping)
    {
        $this->sItHasFreeShipping = $sItHasFreeShipping;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItInstallmentsAvailable()
    {
        return $this->sItInstallmentsAvailable;
    }

    /**
     * @param int $sItInstallmentsAvailable
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItInstallmentsAvailable($sItInstallmentsAvailable)
    {
        $this->sItInstallmentsAvailable = $sItInstallmentsAvailable;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItOrderFulfillmentTime()
    {
        return $this->sItOrderFulfillmentTime;
    }

    /**
     * @param int $sItOrderFulfillmentTime
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItOrderFulfillmentTime($sItOrderFulfillmentTime)
    {
        $this->sItOrderFulfillmentTime = $sItOrderFulfillmentTime;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_AdvertInfoStruct
     */
    public function getSItAdvertInfo()
    {
        return $this->sItAdvertInfo;
    }

    /**
     * @param AdvertInfoStruct $sItAdvertInfo
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItAdvertInfo($sItAdvertInfo)
    {
        $this->sItAdvertInfo = $sItAdvertInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_SellerInfoStruct
     */
    public function getSItSellerInfo()
    {
        return $this->sItSellerInfo;
    }

    /**
     * @param Allegro_Web_Api_SellerInfoStruct $sItSellerInfo
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItSellerInfo($sItSellerInfo)
    {
        $this->sItSellerInfo = $sItSellerInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfAttribstruct
     */
    public function getSItAttribsList()
    {
        return $this->sItAttribsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfAttribstruct $sItAttribsList
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItAttribsList($sItAttribsList)
    {
        $this->sItAttribsList = $sItAttribsList;
        return $this;
    }

    /**
     * @return int
     */
    public function getSItFulfillmentTime()
    {
        return $this->sItFulfillmentTime;
    }

    /**
     * @param int $sItFulfillmentTime
     * @return Allegro_Web_Api_SearchResponseType
     */
    public function setSItFulfillmentTime($sItFulfillmentTime)
    {
        $this->sItFulfillmentTime = $sItFulfillmentTime;
        return $this;
    }
}
