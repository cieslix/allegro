<?php

/**
 * Class Allegro_Web_Api_DoGetMyFutureItemsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyFutureItemsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var Allegro_Web_Api_SortOptionsStruct $sortOptions
     */
    protected $sortOptions = null;

    /**
     * @var Allegro_Web_Api_FutureFilterOptionsStruct $filterOptions
     */
    protected $filterOptions = null;

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $itemIds
     */
    protected $itemIds = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @var int $pageNumber
     */
    protected $pageNumber = null;

    /**
     * @param string $sessionId
     * @param Allegro_Web_Api_SortOptionsStruct $sortOptions
     * @param Allegro_Web_Api_FutureFilterOptionsStruct $filterOptions
     * @param int $categoryId
     * @param Allegro_Web_Api_ArrayOfLong $itemIds
     * @param int $pageSize
     * @param int $pageNumber
     */
    public function __construct($sessionId, $sortOptions, $filterOptions, $categoryId, $itemIds, $pageSize, $pageNumber)
    {
        $this->sessionId = $sessionId;
        $this->sortOptions = $sortOptions;
        $this->filterOptions = $filterOptions;
        $this->categoryId = $categoryId;
        $this->itemIds = $itemIds;
        $this->pageSize = $pageSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return Allegro_Web_Api_DoGetMyFutureItemsRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_SortOptionsStruct
     */
    public function getSortOptions()
    {
        return $this->sortOptions;
    }

    /**
     * @param Allegro_Web_Api_SortOptionsStruct $sortOptions
     * @return Allegro_Web_Api_DoGetMyFutureItemsRequest
     */
    public function setSortOptions($sortOptions)
    {
        $this->sortOptions = $sortOptions;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_FutureFilterOptionsStruct
     */
    public function getFilterOptions()
    {
        return $this->filterOptions;
    }

    /**
     * @param Allegro_Web_Api_FutureFilterOptionsStruct $filterOptions
     * @return Allegro_Web_Api_DoGetMyFutureItemsRequest
     */
    public function setFilterOptions($filterOptions)
    {
        $this->filterOptions = $filterOptions;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return Allegro_Web_Api_DoGetMyFutureItemsRequest
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getItemIds()
    {
        return $this->itemIds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $itemIds
     * @return Allegro_Web_Api_DoGetMyFutureItemsRequest
     */
    public function setItemIds($itemIds)
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return Allegro_Web_Api_DoGetMyFutureItemsRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return Allegro_Web_Api_DoGetMyFutureItemsRequest
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }
}
