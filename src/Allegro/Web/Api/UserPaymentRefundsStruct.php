<?php

/**
 * Class Allegro_Web_Api_UserPaymentRefundsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_UserPaymentRefundsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $payRefundTransId
     */
    protected $payRefundTransId = null;

    /**
     * @var int $payRefundItId
     */
    protected $payRefundItId = null;

    /**
     * @var int $payRefundSellerId
     */
    protected $payRefundSellerId = null;

    /**
     * @var float $payRefundValue
     */
    protected $payRefundValue = null;

    /**
     * @var string $payRefundReason
     */
    protected $payRefundReason = null;

    /**
     * @var int $payRefundDate
     */
    protected $payRefundDate = null;

    /**
     * @param int $payRefundTransId
     * @param int $payRefundItId
     * @param int $payRefundSellerId
     * @param float $payRefundValue
     * @param string $payRefundReason
     * @param int $payRefundDate
     */
    public function __construct($payRefundTransId, $payRefundItId, $payRefundSellerId, $payRefundValue, $payRefundReason, $payRefundDate)
    {
        $this->payRefundTransId = $payRefundTransId;
        $this->payRefundItId = $payRefundItId;
        $this->payRefundSellerId = $payRefundSellerId;
        $this->payRefundValue = $payRefundValue;
        $this->payRefundReason = $payRefundReason;
        $this->payRefundDate = $payRefundDate;
    }

    /**
     * @return int
     */
    public function getPayRefundTransId()
    {
        return $this->payRefundTransId;
    }

    /**
     * @param int $payRefundTransId
     * @return Allegro_Web_Api_UserPaymentRefundsStruct
     */
    public function setPayRefundTransId($payRefundTransId)
    {
        $this->payRefundTransId = $payRefundTransId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayRefundItId()
    {
        return $this->payRefundItId;
    }

    /**
     * @param int $payRefundItId
     * @return Allegro_Web_Api_UserPaymentRefundsStruct
     */
    public function setPayRefundItId($payRefundItId)
    {
        $this->payRefundItId = $payRefundItId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayRefundSellerId()
    {
        return $this->payRefundSellerId;
    }

    /**
     * @param int $payRefundSellerId
     * @return Allegro_Web_Api_UserPaymentRefundsStruct
     */
    public function setPayRefundSellerId($payRefundSellerId)
    {
        $this->payRefundSellerId = $payRefundSellerId;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayRefundValue()
    {
        return $this->payRefundValue;
    }

    /**
     * @param float $payRefundValue
     * @return Allegro_Web_Api_UserPaymentRefundsStruct
     */
    public function setPayRefundValue($payRefundValue)
    {
        $this->payRefundValue = $payRefundValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayRefundReason()
    {
        return $this->payRefundReason;
    }

    /**
     * @param string $payRefundReason
     * @return Allegro_Web_Api_UserPaymentRefundsStruct
     */
    public function setPayRefundReason($payRefundReason)
    {
        $this->payRefundReason = $payRefundReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayRefundDate()
    {
        return $this->payRefundDate;
    }

    /**
     * @param int $payRefundDate
     * @return Allegro_Web_Api_UserPaymentRefundsStruct
     */
    public function setPayRefundDate($payRefundDate)
    {
        $this->payRefundDate = $payRefundDate;
        return $this;
    }
}
