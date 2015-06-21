<?php

/**
 * Class Allegro_Web_Api_DoGetRefundsDealsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetRefundsDealsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $dealsCount
     */
    protected $dealsCount = null;

    /**
     * @var Allegro_Web_Api_ArrayOfRefundsdealslisttype $dealsList
     */
    protected $dealsList = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFilterslisttype $filtersList
     */
    protected $filtersList = null;

    /**
     * @param int                                         $dealsCount
     * @param Allegro_Web_Api_ArrayOfRefundsdealslisttype $dealsList
     * @param Allegro_Web_Api_ArrayOfFilterslisttype      $filtersList
     */
    public function __construct($dealsCount, $dealsList, $filtersList)
    {
        $this->dealsCount  = $dealsCount;
        $this->dealsList   = $dealsList;
        $this->filtersList = $filtersList;
    }

    /**
     * @return int
     */
    public function getDealsCount()
    {
        return $this->dealsCount;
    }

    /**
     * @param int $dealsCount
     * @return Allegro_Web_Api_DoGetRefundsDealsResponse
     */
    public function setDealsCount($dealsCount)
    {
        $this->dealsCount = $dealsCount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfRefundsdealslisttype
     */
    public function getDealsList()
    {
        return $this->dealsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfRefundsdealslisttype $dealsList
     * @return Allegro_Web_Api_DoGetRefundsDealsResponse
     */
    public function setDealsList($dealsList)
    {
        $this->dealsList = $dealsList;
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
     * @return Allegro_Web_Api_DoGetRefundsDealsResponse
     */
    public function setFiltersList($filtersList)
    {
        $this->filtersList = $filtersList;
        return $this;
    }
}
