<?php

/**
 * Class Allegro_Web_Api_DoGetMyIncomingPaymentsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyIncomingPaymentsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $buyerId
     */
    protected $buyerId = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $transRecvDateFrom
     */
    protected $transRecvDateFrom = null;

    /**
     * @var int $transRecvDateTo
     */
    protected $transRecvDateTo = null;

    /**
     * @var int $transPageLimit
     */
    protected $transPageLimit = null;

    /**
     * @var int $transOffset
     */
    protected $transOffset = null;

    /**
     * @param string $sessionHandle
     * @param int    $buyerId
     * @param int    $itemId
     * @param int    $transRecvDateFrom
     * @param int    $transRecvDateTo
     * @param int    $transPageLimit
     * @param int    $transOffset
     */
    public function __construct($sessionHandle, $buyerId, $itemId, $transRecvDateFrom, $transRecvDateTo, $transPageLimit, $transOffset)
    {
        $this->sessionHandle     = $sessionHandle;
        $this->buyerId           = $buyerId;
        $this->itemId            = $itemId;
        $this->transRecvDateFrom = $transRecvDateFrom;
        $this->transRecvDateTo   = $transRecvDateTo;
        $this->transPageLimit    = $transPageLimit;
        $this->transOffset       = $transOffset;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsRequest
     */
    public function setBuyerId($buyerId)
    {
        $this->buyerId = $buyerId;
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
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsRequest
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransRecvDateFrom()
    {
        return $this->transRecvDateFrom;
    }

    /**
     * @param int $transRecvDateFrom
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsRequest
     */
    public function setTransRecvDateFrom($transRecvDateFrom)
    {
        $this->transRecvDateFrom = $transRecvDateFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransRecvDateTo()
    {
        return $this->transRecvDateTo;
    }

    /**
     * @param int $transRecvDateTo
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsRequest
     */
    public function setTransRecvDateTo($transRecvDateTo)
    {
        $this->transRecvDateTo = $transRecvDateTo;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransPageLimit()
    {
        return $this->transPageLimit;
    }

    /**
     * @param int $transPageLimit
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsRequest
     */
    public function setTransPageLimit($transPageLimit)
    {
        $this->transPageLimit = $transPageLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransOffset()
    {
        return $this->transOffset;
    }

    /**
     * @param int $transOffset
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsRequest
     */
    public function setTransOffset($transOffset)
    {
        $this->transOffset = $transOffset;
        return $this;
    }
}
