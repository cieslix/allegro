<?php

/**
 * Class Allegro_Web_Api_DoCancelRefundWarningRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCancelRefundWarningRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @param string $sessionId
     * @param int    $refundId
     */
    public function __construct($sessionId, $refundId)
    {
        $this->sessionId = $sessionId;
        $this->refundId  = $refundId;
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
     * @return Allegro_Web_Api_DoCancelRefundWarningRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRefundId()
    {
        return $this->refundId;
    }

    /**
     * @param int $refundId
     * @return Allegro_Web_Api_DoCancelRefundWarningRequest
     */
    public function setRefundId($refundId)
    {
        $this->refundId = $refundId;
        return $this;
    }
}
