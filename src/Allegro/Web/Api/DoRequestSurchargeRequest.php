<?php

/**
 * Class Allegro_Web_Api_DoRequestSurchargeRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRequestSurchargeRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $transactionId
     */
    protected $transactionId = null;

    /**
     * @var float $surchargeValue
     */
    protected $surchargeValue = null;

    /**
     * @var string $surchargeMessageToBuyer
     */
    protected $surchargeMessageToBuyer = null;

    /**
     * @param string $sessionHandle
     * @param int    $transactionId
     * @param float  $surchargeValue
     * @param string $surchargeMessageToBuyer
     */
    public function __construct($sessionHandle, $transactionId, $surchargeValue, $surchargeMessageToBuyer)
    {
        $this->sessionHandle           = $sessionHandle;
        $this->transactionId           = $transactionId;
        $this->surchargeValue          = $surchargeValue;
        $this->surchargeMessageToBuyer = $surchargeMessageToBuyer;
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
     * @return Allegro_Web_Api_DoRequestSurchargeRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param int $transactionId
     * @return Allegro_Web_Api_DoRequestSurchargeRequest
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return float
     */
    public function getSurchargeValue()
    {
        return $this->surchargeValue;
    }

    /**
     * @param float $surchargeValue
     * @return Allegro_Web_Api_DoRequestSurchargeRequest
     */
    public function setSurchargeValue($surchargeValue)
    {
        $this->surchargeValue = $surchargeValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurchargeMessageToBuyer()
    {
        return $this->surchargeMessageToBuyer;
    }

    /**
     * @param string $surchargeMessageToBuyer
     * @return Allegro_Web_Api_DoRequestSurchargeRequest
     */
    public function setSurchargeMessageToBuyer($surchargeMessageToBuyer)
    {
        $this->surchargeMessageToBuyer = $surchargeMessageToBuyer;
        return $this;
    }
}
