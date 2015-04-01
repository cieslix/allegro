<?php

/**
 * Class Allegro_Web_Api_PostBuyFormItemStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostBuyFormItemStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $postBuyFormItQuantity
     */
    protected $postBuyFormItQuantity = null;

    /**
     * @var float $postBuyFormItAmount
     */
    protected $postBuyFormItAmount = null;

    /**
     * @var int $postBuyFormItId
     */
    protected $postBuyFormItId = null;

    /**
     * @var string $postBuyFormItTitle
     */
    protected $postBuyFormItTitle = null;

    /**
     * @var int $postBuyFormItCountry
     */
    protected $postBuyFormItCountry = null;

    /**
     * @var float $postBuyFormItPrice
     */
    protected $postBuyFormItPrice = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPostbuyformitemdealsstruct $postBuyFormItDeals
     */
    protected $postBuyFormItDeals = null;

    /**
     * @param int $postBuyFormItQuantity
     * @param float $postBuyFormItAmount
     * @param int $postBuyFormItId
     * @param string $postBuyFormItTitle
     * @param int $postBuyFormItCountry
     * @param float $postBuyFormItPrice
     * @param Allegro_Web_Api_ArrayOfPostbuyformitemdealsstruct $postBuyFormItDeals
     */
    public function __construct($postBuyFormItQuantity, $postBuyFormItAmount, $postBuyFormItId, $postBuyFormItTitle, $postBuyFormItCountry, $postBuyFormItPrice, $postBuyFormItDeals)
    {
        $this->postBuyFormItQuantity = $postBuyFormItQuantity;
        $this->postBuyFormItAmount = $postBuyFormItAmount;
        $this->postBuyFormItId = $postBuyFormItId;
        $this->postBuyFormItTitle = $postBuyFormItTitle;
        $this->postBuyFormItCountry = $postBuyFormItCountry;
        $this->postBuyFormItPrice = $postBuyFormItPrice;
        $this->postBuyFormItDeals = $postBuyFormItDeals;
    }

    /**
     * @return int
     */
    public function getPostBuyFormItQuantity()
    {
        return $this->postBuyFormItQuantity;
    }

    /**
     * @param int $postBuyFormItQuantity
     * @return Allegro_Web_Api_PostBuyFormItemStruct
     */
    public function setPostBuyFormItQuantity($postBuyFormItQuantity)
    {
        $this->postBuyFormItQuantity = $postBuyFormItQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormItAmount()
    {
        return $this->postBuyFormItAmount;
    }

    /**
     * @param float $postBuyFormItAmount
     * @return Allegro_Web_Api_PostBuyFormItemStruct
     */
    public function setPostBuyFormItAmount($postBuyFormItAmount)
    {
        $this->postBuyFormItAmount = $postBuyFormItAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormItId()
    {
        return $this->postBuyFormItId;
    }

    /**
     * @param int $postBuyFormItId
     * @return Allegro_Web_Api_PostBuyFormItemStruct
     */
    public function setPostBuyFormItId($postBuyFormItId)
    {
        $this->postBuyFormItId = $postBuyFormItId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormItTitle()
    {
        return $this->postBuyFormItTitle;
    }

    /**
     * @param string $postBuyFormItTitle
     * @return Allegro_Web_Api_PostBuyFormItemStruct
     */
    public function setPostBuyFormItTitle($postBuyFormItTitle)
    {
        $this->postBuyFormItTitle = $postBuyFormItTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormItCountry()
    {
        return $this->postBuyFormItCountry;
    }

    /**
     * @param int $postBuyFormItCountry
     * @return Allegro_Web_Api_PostBuyFormItemStruct
     */
    public function setPostBuyFormItCountry($postBuyFormItCountry)
    {
        $this->postBuyFormItCountry = $postBuyFormItCountry;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormItPrice()
    {
        return $this->postBuyFormItPrice;
    }

    /**
     * @param float $postBuyFormItPrice
     * @return Allegro_Web_Api_PostBuyFormItemStruct
     */
    public function setPostBuyFormItPrice($postBuyFormItPrice)
    {
        $this->postBuyFormItPrice = $postBuyFormItPrice;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPostbuyformitemdealsstruct
     */
    public function getPostBuyFormItDeals()
    {
        return $this->postBuyFormItDeals;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyformitemdealsstruct $postBuyFormItDeals
     * @return Allegro_Web_Api_PostBuyFormItemStruct
     */
    public function setPostBuyFormItDeals($postBuyFormItDeals)
    {
        $this->postBuyFormItDeals = $postBuyFormItDeals;
        return $this;
    }
}
