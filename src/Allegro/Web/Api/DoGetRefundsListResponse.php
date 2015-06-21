<?php

/**
 * Class Allegro_Web_Api_DoGetRefundsListResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetRefundsListResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $refundsCount
     */
    protected $refundsCount = null;

    /**
     * @var Allegro_Web_Api_ArrayOfRefundlisttype $refundsList
     */
    protected $refundsList = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFilterslisttype $filtersList
     */
    protected $filtersList = null;

    /**
     * @param int                                    $refundsCount
     * @param Allegro_Web_Api_ArrayOfRefundlisttype  $refundsList
     * @param Allegro_Web_Api_ArrayOfFilterslisttype $filtersList
     */
    public function __construct($refundsCount, $refundsList, $filtersList)
    {
        $this->refundsCount = $refundsCount;
        $this->refundsList  = $refundsList;
        $this->filtersList  = $filtersList;
    }

    /**
     * @return int
     */
    public function getRefundsCount()
    {
        return $this->refundsCount;
    }

    /**
     * @param int $refundsCount
     * @return Allegro_Web_Api_DoGetRefundsListResponse
     */
    public function setRefundsCount($refundsCount)
    {
        $this->refundsCount = $refundsCount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfRefundlisttype
     */
    public function getRefundsList()
    {
        return $this->refundsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfRefundlisttype $refundsList
     * @return Allegro_Web_Api_DoGetRefundsListResponse
     */
    public function setRefundsList($refundsList)
    {
        $this->refundsList = $refundsList;
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
     * @return Allegro_Web_Api_DoGetRefundsListResponse
     */
    public function setFiltersList($filtersList)
    {
        $this->filtersList = $filtersList;
        return $this;
    }
}
