<?php

/**
 * Class Allegro_Web_Api_RefundsDealsListType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RefundsDealsListType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @var \DateTime $dealDate
     */
    protected $dealDate = null;

    /**
     * @var int $timeLeft
     */
    protected $timeLeft = null;

    /**
     * @var int $buyerId
     */
    protected $buyerId = null;

    /**
     * @var string $buyerLogin
     */
    protected $buyerLogin = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemTitle
     */
    protected $itemTitle = null;

    /**
     * @var int $bidsCount
     */
    protected $bidsCount = null;

    /**
     * @var string $quantityType
     */
    protected $quantityType = null;

    /**
     * @var string $paymentStatus
     */
    protected $paymentStatus = null;

    /**
     * @param int $dealId
     * @param \DateTime $dealDate
     * @param int $timeLeft
     * @param int $buyerId
     * @param string $buyerLogin
     * @param int $itemId
     * @param string $itemTitle
     * @param int $bidsCount
     * @param string $quantityType
     * @param string $paymentStatus
     */
    public function __construct($dealId, \DateTime $dealDate, $timeLeft, $buyerId, $buyerLogin, $itemId, $itemTitle, $bidsCount, $quantityType, $paymentStatus)
    {
        $this->dealId = $dealId;
        $this->dealDate = $dealDate->format(\DateTime::ATOM);
        $this->timeLeft = $timeLeft;
        $this->buyerId = $buyerId;
        $this->buyerLogin = $buyerLogin;
        $this->itemId = $itemId;
        $this->itemTitle = $itemTitle;
        $this->bidsCount = $bidsCount;
        $this->quantityType = $quantityType;
        $this->paymentStatus = $paymentStatus;
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
     * @return Allegro_Web_Api_RefundsDealsListType
     */
    public function setDealId($dealId)
    {
        $this->dealId = $dealId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDealDate()
    {
        if ($this->dealDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dealDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dealDate
     * @return Allegro_Web_Api_RefundsDealsListType
     */
    public function setDealDate(\DateTime $dealDate)
    {
        $this->dealDate = $dealDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeLeft()
    {
        return $this->timeLeft;
    }

    /**
     * @param int $timeLeft
     * @return Allegro_Web_Api_RefundsDealsListType
     */
    public function setTimeLeft($timeLeft)
    {
        $this->timeLeft = $timeLeft;
        return $this;
    }

    /**
     * @return int
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     * @return Allegro_Web_Api_RefundsDealsListType
     */
    public function setBuyerId($buyerId)
    {
        $this->buyerId = $buyerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerLogin()
    {
        return $this->buyerLogin;
    }

    /**
     * @param string $buyerLogin
     * @return Allegro_Web_Api_RefundsDealsListType
     */
    public function setBuyerLogin($buyerLogin)
    {
        $this->buyerLogin = $buyerLogin;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return Allegro_Web_Api_RefundsDealsListType
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * @param string $itemTitle
     * @return Allegro_Web_Api_RefundsDealsListType
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getBidsCount()
    {
        return $this->bidsCount;
    }

    /**
     * @param int $bidsCount
     * @return Allegro_Web_Api_RefundsDealsListType
     */
    public function setBidsCount($bidsCount)
    {
        $this->bidsCount = $bidsCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantityType()
    {
        return $this->quantityType;
    }

    /**
     * @param string $quantityType
     * @return Allegro_Web_Api_RefundsDealsListType
     */
    public function setQuantityType($quantityType)
    {
        $this->quantityType = $quantityType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * @param string $paymentStatus
     * @return Allegro_Web_Api_RefundsDealsListType
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
}
