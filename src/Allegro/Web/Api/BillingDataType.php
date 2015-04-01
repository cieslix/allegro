<?php

/**
 * Class Allegro_Web_Api_BillingDataType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_BillingDataType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $billingId
     */
    protected $billingId = null;

    /**
     * @var string $billingType
     */
    protected $billingType = null;

    /**
     * @var string $billingFixperc
     */
    protected $billingFixperc = null;

    /**
     * @var string $billingName
     */
    protected $billingName = null;

    /**
     * @var string $billingRangeFrom
     */
    protected $billingRangeFrom = null;

    /**
     * @var string $billingRangeTo
     */
    protected $billingRangeTo = null;

    /**
     * @var string $billingCat
     */
    protected $billingCat = null;

    /**
     * @var string $billingRate
     */
    protected $billingRate = null;

    /**
     * @var int $billingAuctionType
     */
    protected $billingAuctionType = null;

    /**
     * @param int $billingId
     * @param string $billingType
     * @param string $billingFixperc
     * @param string $billingName
     * @param string $billingRangeFrom
     * @param string $billingRangeTo
     * @param string $billingCat
     * @param string $billingRate
     * @param int $billingAuctionType
     */
    public function __construct($billingId, $billingType, $billingFixperc, $billingName, $billingRangeFrom, $billingRangeTo, $billingCat, $billingRate, $billingAuctionType)
    {
        $this->billingId = $billingId;
        $this->billingType = $billingType;
        $this->billingFixperc = $billingFixperc;
        $this->billingName = $billingName;
        $this->billingRangeFrom = $billingRangeFrom;
        $this->billingRangeTo = $billingRangeTo;
        $this->billingCat = $billingCat;
        $this->billingRate = $billingRate;
        $this->billingAuctionType = $billingAuctionType;
    }

    /**
     * @return int
     */
    public function getBillingId()
    {
        return $this->billingId;
    }

    /**
     * @param int $billingId
     * @return Allegro_Web_Api_BillingDataType
     */
    public function setBillingId($billingId)
    {
        $this->billingId = $billingId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingType()
    {
        return $this->billingType;
    }

    /**
     * @param string $billingType
     * @return Allegro_Web_Api_BillingDataType
     */
    public function setBillingType($billingType)
    {
        $this->billingType = $billingType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingFixperc()
    {
        return $this->billingFixperc;
    }

    /**
     * @param string $billingFixperc
     * @return Allegro_Web_Api_BillingDataType
     */
    public function setBillingFixperc($billingFixperc)
    {
        $this->billingFixperc = $billingFixperc;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingName()
    {
        return $this->billingName;
    }

    /**
     * @param string $billingName
     * @return Allegro_Web_Api_BillingDataType
     */
    public function setBillingName($billingName)
    {
        $this->billingName = $billingName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingRangeFrom()
    {
        return $this->billingRangeFrom;
    }

    /**
     * @param string $billingRangeFrom
     * @return Allegro_Web_Api_BillingDataType
     */
    public function setBillingRangeFrom($billingRangeFrom)
    {
        $this->billingRangeFrom = $billingRangeFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingRangeTo()
    {
        return $this->billingRangeTo;
    }

    /**
     * @param string $billingRangeTo
     * @return Allegro_Web_Api_BillingDataType
     */
    public function setBillingRangeTo($billingRangeTo)
    {
        $this->billingRangeTo = $billingRangeTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingCat()
    {
        return $this->billingCat;
    }

    /**
     * @param string $billingCat
     * @return Allegro_Web_Api_BillingDataType
     */
    public function setBillingCat($billingCat)
    {
        $this->billingCat = $billingCat;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingRate()
    {
        return $this->billingRate;
    }

    /**
     * @param string $billingRate
     * @return Allegro_Web_Api_BillingDataType
     */
    public function setBillingRate($billingRate)
    {
        $this->billingRate = $billingRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillingAuctionType()
    {
        return $this->billingAuctionType;
    }

    /**
     * @param int $billingAuctionType
     * @return Allegro_Web_Api_BillingDataType
     */
    public function setBillingAuctionType($billingAuctionType)
    {
        $this->billingAuctionType = $billingAuctionType;
        return $this;
    }
}
