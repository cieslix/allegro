<?php

/**
 * Class Allegro_Web_Api_PaymentItemsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PaymentItemsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $payTransItId
     */
    protected $payTransItId = null;

    /**
     * @var string $payTransItName
     */
    protected $payTransItName = null;

    /**
     * @var int $payTransItCount
     */
    protected $payTransItCount = null;

    /**
     * @var float $payTransItPrice
     */
    protected $payTransItPrice = null;

    /**
     * @param int    $payTransItId
     * @param string $payTransItName
     * @param int    $payTransItCount
     * @param float  $payTransItPrice
     */
    public function __construct($payTransItId, $payTransItName, $payTransItCount, $payTransItPrice)
    {
        $this->payTransItId    = $payTransItId;
        $this->payTransItName  = $payTransItName;
        $this->payTransItCount = $payTransItCount;
        $this->payTransItPrice = $payTransItPrice;
    }

    /**
     * @return int
     */
    public function getPayTransItId()
    {
        return $this->payTransItId;
    }

    /**
     * @param int $payTransItId
     * @return Allegro_Web_Api_PaymentItemsStruct
     */
    public function setPayTransItId($payTransItId)
    {
        $this->payTransItId = $payTransItId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayTransItName()
    {
        return $this->payTransItName;
    }

    /**
     * @param string $payTransItName
     * @return Allegro_Web_Api_PaymentItemsStruct
     */
    public function setPayTransItName($payTransItName)
    {
        $this->payTransItName = $payTransItName;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayTransItCount()
    {
        return $this->payTransItCount;
    }

    /**
     * @param int $payTransItCount
     * @return Allegro_Web_Api_PaymentItemsStruct
     */
    public function setPayTransItCount($payTransItCount)
    {
        $this->payTransItCount = $payTransItCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayTransItPrice()
    {
        return $this->payTransItPrice;
    }

    /**
     * @param float $payTransItPrice
     * @return Allegro_Web_Api_PaymentItemsStruct
     */
    public function setPayTransItPrice($payTransItPrice)
    {
        $this->payTransItPrice = $payTransItPrice;
        return $this;
    }
}
