<?php

/**
 * Class Allegro_Web_Api_SearchOptType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SearchOptType extends Allegro_Web_Api_Abstract
{
    const OPTION_ANY_WORD                   = 1;
    const OPTION_IN_DESCRIPTION             = 2;
    const OPTION_IN_LAST_24H                = 4;
    const OPTION_IN_BUY_NOW                 = 8;
    const OPTION_ENDED                      = 16;
    const OPTION_AVAILABLE_IN_USER_CITY     = 32;
    const OPTION_AVAILABLE_IN_USER_PROVINCE = 64;
    const OPTION_EXCLUDE_EROTICA            = 128;
    const OPTION_IN_GENERAL_AVAILABLE       = 256;
    const OPTION_AVAILABLE_FOR_GUESTS       = 512;
    const OPTION_FREE_DELIVERY              = 1024;
    const OPTION_STANDARD_ALLEGRO           = 2048;
    const OPTION_DELIVERY_NOVAYAPOCHTA      = 4096;
    const OPTION_ONLY_BIDDING_TYPE          = 8192;
    const OPTION_SIMILAR                    = 16384;
    const OPTION_NEW_CONDITION              = 32768;
    const OPTION_USED_CONDITION             = 65536;

    const SORT_BY_ENDING_ASC     = 1; //default
    const SORT_BY_OFFERS_NUM_ASC = 2;
    const SORT_BY_PRICE_ASC      = 4;
    const SORT_BY_NAME_ASC       = 8;
    const SORT_BY_RELEVANCE_DESC = 16;

    const ORDER_TYPE_ASC  = 0;
    const ORDER_TYPE_DESC = 1;
    /**
     * @var string $searchString
     */
    protected $searchString = null;

    /**
     * @var int $searchOptions
     */
    protected $searchOptions = null;

    /**
     * @var int $searchOrder
     */
    protected $searchOrder = null;

    /**
     * @var int $searchOrderType
     */
    protected $searchOrderType = null;

    /**
     * @var int $searchCountry
     */
    protected $searchCountry = null;

    /**
     * @var int $searchCategory
     */
    protected $searchCategory = null;

    /**
     * @var int $searchOffset
     */
    protected $searchOffset = null;

    /**
     * @var string $searchCity
     */
    protected $searchCity = null;

    /**
     * @var int $searchState
     */
    protected $searchState = null;

    /**
     * @var float $searchPriceFrom
     */
    protected $searchPriceFrom = null;

    /**
     * @var float $searchPriceTo
     */
    protected $searchPriceTo = null;

    /**
     * @var int $searchLimit
     */
    protected $searchLimit = null;

    /**
     * @var int $searchOrderFulfillmentTime
     */
    protected $searchOrderFulfillmentTime = null;

    /**
     * @var int $searchUser
     */
    protected $searchUser = null;

    /**
     * @param string $searchString
     * @param int    $searchOptions
     * @param int    $searchOrder
     * @param int    $searchOrderType
     * @param int    $searchCountry
     * @param int    $searchCategory
     * @param int    $searchOffset
     * @param string $searchCity
     * @param int    $searchState
     * @param float  $searchPriceFrom
     * @param float  $searchPriceTo
     * @param int    $searchLimit
     * @param int    $searchOrderFulfillmentTime
     * @param int    $searchUser
     */
    public function __construct($searchString, $searchOptions = 0, $searchOrder = 0, $searchOrderType = 0, $searchCountry = 0, $searchCategory = 0, $searchOffset = 0, $searchCity = '', $searchState = 0, $searchPriceFrom = 0.0, $searchPriceTo = 0.0, $searchLimit = 0, $searchOrderFulfillmentTime = 0, $searchUser = 0)
    {
        $this->searchString               = $searchString;
        $this->searchOptions              = $searchOptions;
        $this->searchOrder                = $searchOrder;
        $this->searchOrderType            = $searchOrderType;
        $this->searchCountry              = $searchCountry;
        $this->searchCategory             = $searchCategory;
        $this->searchOffset               = $searchOffset;
        $this->searchCity                 = $searchCity;
        $this->searchState                = $searchState;
        $this->searchPriceFrom            = $searchPriceFrom;
        $this->searchPriceTo              = $searchPriceTo;
        $this->searchLimit                = $searchLimit;
        $this->searchOrderFulfillmentTime = $searchOrderFulfillmentTime;
        $this->searchUser                 = $searchUser;
    }

    /**
     * @return string
     */
    public function getSearchString()
    {
        return $this->searchString;
    }

    /**
     * @param string $searchString
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchString($searchString)
    {
        $this->searchString = $searchString;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchOptions()
    {
        return $this->searchOptions;
    }

    /**
     * @param int $searchOptions
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchOptions($searchOptions)
    {
        $this->searchOptions = $searchOptions;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchOrder()
    {
        return $this->searchOrder;
    }

    /**
     * @param int $searchOrder
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchOrder($searchOrder)
    {
        $this->searchOrder = $searchOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchOrderType()
    {
        return $this->searchOrderType;
    }

    /**
     * @param int $searchOrderType
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchOrderType($searchOrderType)
    {
        $this->searchOrderType = $searchOrderType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchCountry()
    {
        return $this->searchCountry;
    }

    /**
     * @param int $searchCountry
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchCountry($searchCountry)
    {
        $this->searchCountry = $searchCountry;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchCategory()
    {
        return $this->searchCategory;
    }

    /**
     * @param int $searchCategory
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchCategory($searchCategory)
    {
        $this->searchCategory = $searchCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchOffset()
    {
        return $this->searchOffset;
    }

    /**
     * @param int $searchOffset
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchOffset($searchOffset)
    {
        $this->searchOffset = $searchOffset;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchCity()
    {
        return $this->searchCity;
    }

    /**
     * @param string $searchCity
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchCity($searchCity)
    {
        $this->searchCity = $searchCity;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchState()
    {
        return $this->searchState;
    }

    /**
     * @param int $searchState
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchState($searchState)
    {
        $this->searchState = $searchState;
        return $this;
    }

    /**
     * @return float
     */
    public function getSearchPriceFrom()
    {
        return $this->searchPriceFrom;
    }

    /**
     * @param float $searchPriceFrom
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchPriceFrom($searchPriceFrom)
    {
        $this->searchPriceFrom = $searchPriceFrom;
        return $this;
    }

    /**
     * @return float
     */
    public function getSearchPriceTo()
    {
        return $this->searchPriceTo;
    }

    /**
     * @param float $searchPriceTo
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchPriceTo($searchPriceTo)
    {
        $this->searchPriceTo = $searchPriceTo;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchLimit()
    {
        return $this->searchLimit;
    }

    /**
     * @param int $searchLimit
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchLimit($searchLimit)
    {
        $this->searchLimit = $searchLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchOrderFulfillmentTime()
    {
        return $this->searchOrderFulfillmentTime;
    }

    /**
     * @param int $searchOrderFulfillmentTime
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchOrderFulfillmentTime($searchOrderFulfillmentTime)
    {
        $this->searchOrderFulfillmentTime = $searchOrderFulfillmentTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchUser()
    {
        return $this->searchUser;
    }

    /**
     * @param int $searchUser
     * @return Allegro_Web_Api_SearchOptType
     */
    public function setSearchUser($searchUser)
    {
        $this->searchUser = $searchUser;
        return $this;
    }
}
