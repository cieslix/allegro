<?php

/**
 * Class Allegro_Web_Api_RequestPayoutStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RequestPayoutStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $payoutId
     */
    protected $payoutId = null;

    /**
     * @var float $payoutAmount
     */
    protected $payoutAmount = null;

    /**
     * @var int $payoutTime
     */
    protected $payoutTime = null;

    /**
     * @param int   $payoutId
     * @param float $payoutAmount
     * @param int   $payoutTime
     */
    public function __construct($payoutId, $payoutAmount, $payoutTime)
    {
        $this->payoutId     = $payoutId;
        $this->payoutAmount = $payoutAmount;
        $this->payoutTime   = $payoutTime;
    }

    /**
     * @return int
     */
    public function getPayoutId()
    {
        return $this->payoutId;
    }

    /**
     * @param int $payoutId
     * @return Allegro_Web_Api_RequestPayoutStruct
     */
    public function setPayoutId($payoutId)
    {
        $this->payoutId = $payoutId;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayoutAmount()
    {
        return $this->payoutAmount;
    }

    /**
     * @param float $payoutAmount
     * @return Allegro_Web_Api_RequestPayoutStruct
     */
    public function setPayoutAmount($payoutAmount)
    {
        $this->payoutAmount = $payoutAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayoutTime()
    {
        return $this->payoutTime;
    }

    /**
     * @param int $payoutTime
     * @return Allegro_Web_Api_RequestPayoutStruct
     */
    public function setPayoutTime($payoutTime)
    {
        $this->payoutTime = $payoutTime;
        return $this;
    }
}
