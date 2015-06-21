<?php

/**
 * Class Allegro_Web_Api_DoGetMyPaymentsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyPaymentsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $sellerId
     */
    protected $sellerId = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $paymentTimeFrom
     */
    protected $paymentTimeFrom = null;

    /**
     * @var int $paymentTimeTo
     */
    protected $paymentTimeTo = null;

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
     * @param int    $sellerId
     * @param int    $itemId
     * @param int    $paymentTimeFrom
     * @param int    $paymentTimeTo
     * @param int    $pageSize
     * @param int    $pageNumber
     */
    public function __construct($sessionId, $sellerId, $itemId, $paymentTimeFrom, $paymentTimeTo, $pageSize, $pageNumber)
    {
        $this->sessionId       = $sessionId;
        $this->sellerId        = $sellerId;
        $this->itemId          = $itemId;
        $this->paymentTimeFrom = $paymentTimeFrom;
        $this->paymentTimeTo   = $paymentTimeTo;
        $this->pageSize        = $pageSize;
        $this->pageNumber      = $pageNumber;
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
     * @return Allegro_Web_Api_DoGetMyPaymentsRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * @param int $sellerId
     * @return Allegro_Web_Api_DoGetMyPaymentsRequest
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return Allegro_Web_Api_DoGetMyPaymentsRequest
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentTimeFrom()
    {
        return $this->paymentTimeFrom;
    }

    /**
     * @param int $paymentTimeFrom
     * @return Allegro_Web_Api_DoGetMyPaymentsRequest
     */
    public function setPaymentTimeFrom($paymentTimeFrom)
    {
        $this->paymentTimeFrom = $paymentTimeFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentTimeTo()
    {
        return $this->paymentTimeTo;
    }

    /**
     * @param int $paymentTimeTo
     * @return Allegro_Web_Api_DoGetMyPaymentsRequest
     */
    public function setPaymentTimeTo($paymentTimeTo)
    {
        $this->paymentTimeTo = $paymentTimeTo;
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
     * @return Allegro_Web_Api_DoGetMyPaymentsRequest
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
     * @return Allegro_Web_Api_DoGetMyPaymentsRequest
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }
}
