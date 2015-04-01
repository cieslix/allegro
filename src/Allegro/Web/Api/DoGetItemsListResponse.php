<?php

/**
 * Class Allegro_Web_Api_DoGetItemsListResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetItemsListResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemsCount
     */
    protected $itemsCount = null;

    /**
     * @var int $itemsFeaturedCount
     */
    protected $itemsFeaturedCount = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItemslisttype $itemsList
     */
    protected $itemsList = null;

    /**
     * @var Allegro_Web_Api_CategoriesListType $categoriesList
     */
    protected $categoriesList = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFilterslisttype $filtersList
     */
    protected $filtersList = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $filtersRejected
     */
    protected $filtersRejected = null;

    /**
     * @param int $itemsCount
     * @param int $itemsFeaturedCount
     * @param Allegro_Web_Api_ArrayOfItemslisttype $itemsList
     * @param Allegro_Web_Api_CategoriesListType $categoriesList
     * @param Allegro_Web_Api_ArrayOfFilterslisttype $filtersList
     * @param Allegro_Web_Api_ArrayOfString $filtersRejected
     */
    public function __construct($itemsCount, $itemsFeaturedCount, $itemsList, $categoriesList, $filtersList, $filtersRejected)
    {
        $this->itemsCount = $itemsCount;
        $this->itemsFeaturedCount = $itemsFeaturedCount;
        $this->itemsList = $itemsList;
        $this->categoriesList = $categoriesList;
        $this->filtersList = $filtersList;
        $this->filtersRejected = $filtersRejected;
    }

    /**
     * @return int
     */
    public function getItemsCount()
    {
        return $this->itemsCount;
    }

    /**
     * @param int $itemsCount
     * @return Allegro_Web_Api_DoGetItemsListResponse
     */
    public function setItemsCount($itemsCount)
    {
        $this->itemsCount = $itemsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemsFeaturedCount()
    {
        return $this->itemsFeaturedCount;
    }

    /**
     * @param int $itemsFeaturedCount
     * @return Allegro_Web_Api_DoGetItemsListResponse
     */
    public function setItemsFeaturedCount($itemsFeaturedCount)
    {
        $this->itemsFeaturedCount = $itemsFeaturedCount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemslisttype
     */
    public function getItemsList()
    {
        return $this->itemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemslisttype $itemsList
     * @return Allegro_Web_Api_DoGetItemsListResponse
     */
    public function setItemsList($itemsList)
    {
        $this->itemsList = $itemsList;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_CategoriesListType
     */
    public function getCategoriesList()
    {
        return $this->categoriesList;
    }

    /**
     * @param Allegro_Web_Api_CategoriesListType $categoriesList
     * @return Allegro_Web_Api_DoGetItemsListResponse
     */
    public function setCategoriesList($categoriesList)
    {
        $this->categoriesList = $categoriesList;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFilterslisttype
     */
    public function getFiltersList()
    {
        return $this->filtersList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFilterslisttype $filtersList
     * @return Allegro_Web_Api_DoGetItemsListResponse
     */
    public function setFiltersList($filtersList)
    {
        $this->filtersList = $filtersList;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getFiltersRejected()
    {
        return $this->filtersRejected;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $filtersRejected
     * @return Allegro_Web_Api_DoGetItemsListResponse
     */
    public function setFiltersRejected($filtersRejected)
    {
        $this->filtersRejected = $filtersRejected;
        return $this;
    }
}
