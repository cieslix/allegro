<?php

/**
 * Class Allegro_Web_Api_RefundListType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RefundListType extends Allegro_Web_Api_Abstract
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
     * @var Allegro_Web_Api_RefundDetailsType $refundDetails
     */
    protected $refundDetails = null;

    /**
     * @param int                               $dealId
     * @param \DateTime                         $dealDate
     * @param int                               $buyerId
     * @param string                            $buyerLogin
     * @param int                               $itemId
     * @param string                            $itemTitle
     * @param int                               $bidsCount
     * @param string                            $quantityType
     * @param Allegro_Web_Api_RefundDetailsType $refundDetails
     */
    public function __construct($dealId, \DateTime $dealDate, $buyerId, $buyerLogin, $itemId, $itemTitle, $bidsCount, $quantityType, $refundDetails)
    {
        $this->dealId        = $dealId;
        $this->dealDate      = $dealDate->format(\DateTime::ATOM);
        $this->buyerId       = $buyerId;
        $this->buyerLogin    = $buyerLogin;
        $this->itemId        = $itemId;
        $this->itemTitle     = $itemTitle;
        $this->bidsCount     = $bidsCount;
        $this->quantityType  = $quantityType;
        $this->refundDetails = $refundDetails;
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
     * @return Allegro_Web_Api_RefundListType
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
     * @return Allegro_Web_Api_RefundListType
     */
    public function setDealDate(\DateTime $dealDate)
    {
        $this->dealDate = $dealDate->format(\DateTime::ATOM);
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
     * @return Allegro_Web_Api_RefundListType
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
     * @return Allegro_Web_Api_RefundListType
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
     * @return Allegro_Web_Api_RefundListType
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
     * @return Allegro_Web_Api_RefundListType
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
     * @return Allegro_Web_Api_RefundListType
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
     * @return Allegro_Web_Api_RefundListType
     */
    public function setQuantityType($quantityType)
    {
        $this->quantityType = $quantityType;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_RefundDetailsType
     */
    public function getRefundDetails()
    {
        return $this->refundDetails;
    }

    /**
     * @param Allegro_Web_Api_RefundDetailsType $refundDetails
     * @return Allegro_Web_Api_RefundListType
     */
    public function setRefundDetails($refundDetails)
    {
        $this->refundDetails = $refundDetails;
        return $this;
    }
}
