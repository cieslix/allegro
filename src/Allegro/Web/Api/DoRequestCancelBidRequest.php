<?php

/**
 * Class Allegro_Web_Api_DoRequestCancelBidRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRequestCancelBidRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $requestItemId
     */
    protected $requestItemId = null;

    /**
     * @var string $requestCancelReason
     */
    protected $requestCancelReason = null;

    /**
     * @param string $sessionHandle
     * @param int    $requestItemId
     * @param string $requestCancelReason
     */
    public function __construct($sessionHandle, $requestItemId, $requestCancelReason)
    {
        $this->sessionHandle       = $sessionHandle;
        $this->requestItemId       = $requestItemId;
        $this->requestCancelReason = $requestCancelReason;
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
     * @return Allegro_Web_Api_DoRequestCancelBidRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getRequestItemId()
    {
        return $this->requestItemId;
    }

    /**
     * @param int $requestItemId
     * @return Allegro_Web_Api_DoRequestCancelBidRequest
     */
    public function setRequestItemId($requestItemId)
    {
        $this->requestItemId = $requestItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestCancelReason()
    {
        return $this->requestCancelReason;
    }

    /**
     * @param string $requestCancelReason
     * @return Allegro_Web_Api_DoRequestCancelBidRequest
     */
    public function setRequestCancelReason($requestCancelReason)
    {
        $this->requestCancelReason = $requestCancelReason;
        return $this;
    }
}
