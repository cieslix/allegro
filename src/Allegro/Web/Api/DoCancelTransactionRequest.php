<?php

/**
 * Class Allegro_Web_Api_DoCancelTransactionRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCancelTransactionRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $transactionId
     */
    protected $transactionId = null;

    /**
     * @param string $sessionId
     * @param int    $transactionId
     */
    public function __construct($sessionId, $transactionId)
    {
        $this->sessionId     = $sessionId;
        $this->transactionId = $transactionId;
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
     * @return Allegro_Web_Api_DoCancelTransactionRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
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
     * @return Allegro_Web_Api_DoCancelTransactionRequest
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }
}
