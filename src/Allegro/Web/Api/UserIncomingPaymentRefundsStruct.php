<?php

/**
 * Class Allegro_Web_Api_UserIncomingPaymentRefundsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_UserIncomingPaymentRefundsStruct extends Allegro_Web_Api_Abstract
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
     * @var int $payRefundBuyerId
     */
    protected $payRefundBuyerId = null;

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
     * @param int $payRefundBuyerId
     * @param float $payRefundValue
     * @param string $payRefundReason
     * @param int $payRefundDate
     */
    public function __construct($payRefundTransId, $payRefundItId, $payRefundBuyerId, $payRefundValue, $payRefundReason, $payRefundDate)
    {
        $this->payRefundTransId = $payRefundTransId;
        $this->payRefundItId = $payRefundItId;
        $this->payRefundBuyerId = $payRefundBuyerId;
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
     * @return Allegro_Web_Api_UserIncomingPaymentRefundsStruct
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
     * @return Allegro_Web_Api_UserIncomingPaymentRefundsStruct
     */
    public function setPayRefundItId($payRefundItId)
    {
        $this->payRefundItId = $payRefundItId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayRefundBuyerId()
    {
        return $this->payRefundBuyerId;
    }

    /**
     * @param int $payRefundBuyerId
     * @return Allegro_Web_Api_UserIncomingPaymentRefundsStruct
     */
    public function setPayRefundBuyerId($payRefundBuyerId)
    {
        $this->payRefundBuyerId = $payRefundBuyerId;
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
     * @return Allegro_Web_Api_UserIncomingPaymentRefundsStruct
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
     * @return Allegro_Web_Api_UserIncomingPaymentRefundsStruct
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
     * @return Allegro_Web_Api_UserIncomingPaymentRefundsStruct
     */
    public function setPayRefundDate($payRefundDate)
    {
        $this->payRefundDate = $payRefundDate;
        return $this;
    }
}
