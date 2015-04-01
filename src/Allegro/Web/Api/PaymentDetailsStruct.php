<?php

/**
 * Class Allegro_Web_Api_PaymentDetailsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PaymentDetailsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $payTransDetailsItId
     */
    protected $payTransDetailsItId = null;

    /**
     * @var float $payTransDetailsPrice
     */
    protected $payTransDetailsPrice = null;

    /**
     * @var int $payTransDetailsCount
     */
    protected $payTransDetailsCount = null;

    /**
     * @param int $payTransDetailsItId
     * @param float $payTransDetailsPrice
     * @param int $payTransDetailsCount
     */
    public function __construct($payTransDetailsItId, $payTransDetailsPrice, $payTransDetailsCount)
    {
        $this->payTransDetailsItId = $payTransDetailsItId;
        $this->payTransDetailsPrice = $payTransDetailsPrice;
        $this->payTransDetailsCount = $payTransDetailsCount;
    }

    /**
     * @return int
     */
    public function getPayTransDetailsItId()
    {
        return $this->payTransDetailsItId;
    }

    /**
     * @param int $payTransDetailsItId
     * @return Allegro_Web_Api_PaymentDetailsStruct
     */
    public function setPayTransDetailsItId($payTransDetailsItId)
    {
        $this->payTransDetailsItId = $payTransDetailsItId;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayTransDetailsPrice()
    {
        return $this->payTransDetailsPrice;
    }

    /**
     * @param float $payTransDetailsPrice
     * @return Allegro_Web_Api_PaymentDetailsStruct
     */
    public function setPayTransDetailsPrice($payTransDetailsPrice)
    {
        $this->payTransDetailsPrice = $payTransDetailsPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayTransDetailsCount()
    {
        return $this->payTransDetailsCount;
    }

    /**
     * @param int $payTransDetailsCount
     * @return Allegro_Web_Api_PaymentDetailsStruct
     */
    public function setPayTransDetailsCount($payTransDetailsCount)
    {
        $this->payTransDetailsCount = $payTransDetailsCount;
        return $this;
    }
}
