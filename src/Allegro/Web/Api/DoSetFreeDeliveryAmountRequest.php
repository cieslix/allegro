<?php

/**
 * Class Allegro_Web_Api_DoSetFreeDeliveryAmountRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSetFreeDeliveryAmountRequest extends Allegro_Web_Api_Abstract
{
    const ACTIVE_FLAG_YES = 2;
    const ACTIVE_FLAG_NO = 1;

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @var float $freeDeliveryAmount
     */
    protected $freeDeliveryAmount = null;

    /**
     * @param string $sessionId
     * @param int $activeFlag
     * @param float $freeDeliveryAmount
     */
    public function __construct($sessionId, $activeFlag, $freeDeliveryAmount)
    {
        $this->sessionId = $sessionId;
        $this->activeFlag = $activeFlag;
        $this->freeDeliveryAmount = $freeDeliveryAmount;
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
     * @return Allegro_Web_Api_DoSetFreeDeliveryAmountRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getActiveFlag()
    {
        return $this->activeFlag;
    }

    /**
     * @param int $activeFlag
     * @return Allegro_Web_Api_DoSetFreeDeliveryAmountRequest
     */
    public function setActiveFlag($activeFlag)
    {
        $this->activeFlag = $activeFlag;
        return $this;
    }

    /**
     * @return float
     */
    public function getFreeDeliveryAmount()
    {
        return $this->freeDeliveryAmount;
    }

    /**
     * @param float $freeDeliveryAmount
     * @return Allegro_Web_Api_DoSetFreeDeliveryAmountRequest
     */
    public function setFreeDeliveryAmount($freeDeliveryAmount)
    {
        $this->freeDeliveryAmount = $freeDeliveryAmount;
        return $this;
    }
}
