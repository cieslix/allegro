<?php

/**
 * Class Allegro_Web_Api_DoGetItemsListRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetItemsListRequest extends Allegro_Web_Api_Abstract
{
    const RETURN_MASK_DEFAULT = 0;
    const RETURN_MASK_WITHOUT_FILTERS = 1;
    const RETURN_MASK_WITHOUT_CATEGORIES = 2;
    const RETURN_MASK_WITHOUT_OFFERS = 4;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions
     */
    protected $filterOptions = null;

    /**
     * @var Allegro_Web_Api_SortOptionsType $sortOptions
     */
    protected $sortOptions = null;

    /**
     * @var int $resultSize
     */
    protected $resultSize = null;

    /**
     * @var int $resultOffset
     */
    protected $resultOffset = null;

    /**
     * @var int $resultScope
     */
    protected $resultScope = null;

    /**
     * @param string $webapiKey
     * @param int $countryId
     * @param Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions
     * @param Allegro_Web_Api_SortOptionsType $sortOptions
     * @param int $resultSize
     * @param int $resultOffset
     * @param int $resultScope
     */
    public function __construct($webapiKey, $countryId, $filterOptions, $sortOptions, $resultSize, $resultOffset, $resultScope)
    {
        $this->webapiKey = $webapiKey;
        $this->countryId = $countryId;
        $this->filterOptions = $filterOptions;
        $this->sortOptions = $sortOptions;
        $this->resultSize = $resultSize;
        $this->resultOffset = $resultOffset;
        $this->resultScope = $resultScope;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
        return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return Allegro_Web_Api_DoGetItemsListRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return Allegro_Web_Api_DoGetItemsListRequest
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFilteroptionstype
     */
    public function getFilterOptions()
    {
        return $this->filterOptions;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions
     * @return Allegro_Web_Api_DoGetItemsListRequest
     */
    public function setFilterOptions($filterOptions)
    {
        $this->filterOptions = $filterOptions;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_SortOptionsType
     */
    public function getSortOptions()
    {
        return $this->sortOptions;
    }

    /**
     * @param Allegro_Web_Api_SortOptionsType $sortOptions
     * @return Allegro_Web_Api_DoGetItemsListRequest
     */
    public function setSortOptions($sortOptions)
    {
        $this->sortOptions = $sortOptions;
        return $this;
    }

    /**
     * @return int
     */
    public function getResultSize()
    {
        return $this->resultSize;
    }

    /**
     * @param int $resultSize
     * @return Allegro_Web_Api_DoGetItemsListRequest
     */
    public function setResultSize($resultSize)
    {
        $this->resultSize = $resultSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getResultOffset()
    {
        return $this->resultOffset;
    }

    /**
     * @param int $resultOffset
     * @return Allegro_Web_Api_DoGetItemsListRequest
     */
    public function setResultOffset($resultOffset)
    {
        $this->resultOffset = $resultOffset;
        return $this;
    }

    /**
     * @return int
     */
    public function getResultScope()
    {
        return $this->resultScope;
    }

    /**
     * @param int $resultScope
     * @return Allegro_Web_Api_DoGetItemsListRequest
     */
    public function setResultScope($resultScope)
    {
        $this->resultScope = $resultScope;
        return $this;
    }
}
