<?php

/**
 * Class Allegro_Web_Api_PostBuyFormItemDealsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostBuyFormItemDealsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @var float $dealFinalPrice
     */
    protected $dealFinalPrice = null;

    /**
     * @var int $dealQuantity
     */
    protected $dealQuantity = null;

    /**
     * @var \DateTime $dealDate
     */
    protected $dealDate = null;

    /**
     * @var boolean $dealWasDiscounted
     */
    protected $dealWasDiscounted = null;

    /**
     * @param int       $dealId
     * @param float     $dealFinalPrice
     * @param int       $dealQuantity
     * @param \DateTime $dealDate
     * @param boolean   $dealWasDiscounted
     */
    public function __construct($dealId, $dealFinalPrice, $dealQuantity, \DateTime $dealDate, $dealWasDiscounted)
    {
        $this->dealId            = $dealId;
        $this->dealFinalPrice    = $dealFinalPrice;
        $this->dealQuantity      = $dealQuantity;
        $this->dealDate          = $dealDate->format(\DateTime::ATOM);
        $this->dealWasDiscounted = $dealWasDiscounted;
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
     * @return Allegro_Web_Api_PostBuyFormItemDealsStruct
     */
    public function setDealId($dealId)
    {
        $this->dealId = $dealId;
        return $this;
    }

    /**
     * @return float
     */
    public function getDealFinalPrice()
    {
        return $this->dealFinalPrice;
    }

    /**
     * @param float $dealFinalPrice
     * @return Allegro_Web_Api_PostBuyFormItemDealsStruct
     */
    public function setDealFinalPrice($dealFinalPrice)
    {
        $this->dealFinalPrice = $dealFinalPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getDealQuantity()
    {
        return $this->dealQuantity;
    }

    /**
     * @param int $dealQuantity
     * @return Allegro_Web_Api_PostBuyFormItemDealsStruct
     */
    public function setDealQuantity($dealQuantity)
    {
        $this->dealQuantity = $dealQuantity;
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
     * @return Allegro_Web_Api_PostBuyFormItemDealsStruct
     */
    public function setDealDate(\DateTime $dealDate)
    {
        $this->dealDate = $dealDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDealWasDiscounted()
    {
        return $this->dealWasDiscounted;
    }

    /**
     * @param boolean $dealWasDiscounted
     * @return Allegro_Web_Api_PostBuyFormItemDealsStruct
     */
    public function setDealWasDiscounted($dealWasDiscounted)
    {
        $this->dealWasDiscounted = $dealWasDiscounted;
        return $this;
    }
}
