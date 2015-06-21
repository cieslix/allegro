<?php

/**
 * Class Allegro_Web_Api_DoGetRefundsDealsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetRefundsDealsRequest extends Allegro_Web_Api_Abstract
{
    const SORT_ORDER_ASC  = 'asc';
    const SORT_ORDER_DESC = 'desc';

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions
     */
    protected $filterOptions = null;

    /**
     * @var string $sortOrder
     */
    protected $sortOrder = null;

    /**
     * @var int $resultSize
     */
    protected $resultSize = null;

    /**
     * @var int $resultOffset
     */
    protected $resultOffset = null;

    /**
     * @param string                                   $sessionId
     * @param Allegro_Web_Api_ArrayOfFilteroptionstype $filterOptions
     * @param string                                   $sortOrder
     * @param int                                      $resultSize
     * @param int                                      $resultOffset
     */
    public function __construct($sessionId, $filterOptions, $sortOrder, $resultSize, $resultOffset)
    {
        $this->sessionId     = $sessionId;
        $this->filterOptions = $filterOptions;
        $this->sortOrder     = $sortOrder;
        $this->resultSize    = $resultSize;
        $this->resultOffset  = $resultOffset;
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
     * @return Allegro_Web_Api_DoGetRefundsDealsRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
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
     * @return Allegro_Web_Api_DoGetRefundsDealsRequest
     */
    public function setFilterOptions($filterOptions)
    {
        $this->filterOptions = $filterOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     * @return Allegro_Web_Api_DoGetRefundsDealsRequest
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
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
     * @return Allegro_Web_Api_DoGetRefundsDealsRequest
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
     * @return Allegro_Web_Api_DoGetRefundsDealsRequest
     */
    public function setResultOffset($resultOffset)
    {
        $this->resultOffset = $resultOffset;
        return $this;
    }
}
