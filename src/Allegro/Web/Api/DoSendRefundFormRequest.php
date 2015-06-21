<?php

/**
 * Class Allegro_Web_Api_DoSendRefundFormRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSendRefundFormRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @var int $reasonId
     */
    protected $reasonId = null;

    /**
     * @var int $refundQuantity
     */
    protected $refundQuantity = null;

    /**
     * @param string $sessionId
     * @param int    $dealId
     * @param int    $reasonId
     * @param int    $refundQuantity
     */
    public function __construct($sessionId, $dealId, $reasonId, $refundQuantity)
    {
        $this->sessionId      = $sessionId;
        $this->dealId         = $dealId;
        $this->reasonId       = $reasonId;
        $this->refundQuantity = $refundQuantity;
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
     * @return Allegro_Web_Api_DoSendRefundFormRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDealId()
    {
        return $this->dealId;
    }

    /**
     * @param int $dealId
     * @return Allegro_Web_Api_DoSendRefundFormRequest
     */
    public function setDealId($dealId)
    {
        $this->dealId = $dealId;
        return $this;
    }

    /**
     * @return int
     */
    public function getReasonId()
    {
        return $this->reasonId;
    }

    /**
     * @param int $reasonId
     * @return Allegro_Web_Api_DoSendRefundFormRequest
     */
    public function setReasonId($reasonId)
    {
        $this->reasonId = $reasonId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRefundQuantity()
    {
        return $this->refundQuantity;
    }

    /**
     * @param int $refundQuantity
     * @return Allegro_Web_Api_DoSendRefundFormRequest
     */
    public function setRefundQuantity($refundQuantity)
    {
        $this->refundQuantity = $refundQuantity;
        return $this;
    }
}
