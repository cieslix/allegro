<?php

/**
 * Class Allegro_Web_Api_DoBidItemRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoBidItemRequest extends Allegro_Web_Api_Abstract
{
    const BID_BUY_NOW_YES = 1;
    const BID_BUY_NOW_NO = 0;

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $bidItId
     */
    protected $bidItId = null;

    /**
     * @var float $bidUserPrice
     */
    protected $bidUserPrice = null;

    /**
     * @var int $bidQuantity
     */
    protected $bidQuantity = null;

    /**
     * @var int $bidBuyNow
     */
    protected $bidBuyNow = null;

    /**
     * @var Allegro_Web_Api_PharmacyRecipientDataStruct $pharmacyRecipientData
     */
    protected $pharmacyRecipientData = null;

    /**
     * @var string $variantId
     */
    protected $variantId = null;

    /**
     * @param string $sessionHandle
     * @param int $bidItId
     * @param float $bidUserPrice
     * @param int $bidQuantity
     * @param int $bidBuyNow
     * @param Allegro_Web_Api_PharmacyRecipientDataStruct $pharmacyRecipientData
     * @param string $variantId
     */
    public function __construct($sessionHandle, $bidItId, $bidUserPrice, $bidQuantity, $bidBuyNow, $pharmacyRecipientData, $variantId)
    {
        $this->sessionHandle = $sessionHandle;
        $this->bidItId = $bidItId;
        $this->bidUserPrice = $bidUserPrice;
        $this->bidQuantity = $bidQuantity;
        $this->bidBuyNow = $bidBuyNow;
        $this->pharmacyRecipientData = $pharmacyRecipientData;
        $this->variantId = $variantId;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return Allegro_Web_Api_DoBidItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getBidItId()
    {
        return $this->bidItId;
    }

    /**
     * @param int $bidItId
     * @return Allegro_Web_Api_DoBidItemRequest
     */
    public function setBidItId($bidItId)
    {
        $this->bidItId = $bidItId;
        return $this;
    }

    /**
     * @return float
     */
    public function getBidUserPrice()
    {
        return $this->bidUserPrice;
    }

    /**
     * @param float $bidUserPrice
     * @return Allegro_Web_Api_DoBidItemRequest
     */
    public function setBidUserPrice($bidUserPrice)
    {
        $this->bidUserPrice = $bidUserPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getBidQuantity()
    {
        return $this->bidQuantity;
    }

    /**
     * @param int $bidQuantity
     * @return Allegro_Web_Api_DoBidItemRequest
     */
    public function setBidQuantity($bidQuantity)
    {
        $this->bidQuantity = $bidQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getBidBuyNow()
    {
        return $this->bidBuyNow;
    }

    /**
     * @param int $bidBuyNow
     * @return Allegro_Web_Api_DoBidItemRequest
     */
    public function setBidBuyNow($bidBuyNow)
    {
        $this->bidBuyNow = $bidBuyNow;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PharmacyRecipientDataStruct
     */
    public function getPharmacyRecipientData()
    {
        return $this->pharmacyRecipientData;
    }

    /**
     * @param Allegro_Web_Api_PharmacyRecipientDataStruct $pharmacyRecipientData
     * @return Allegro_Web_Api_DoBidItemRequest
     */
    public function setPharmacyRecipientData($pharmacyRecipientData)
    {
        $this->pharmacyRecipientData = $pharmacyRecipientData;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @param string $variantId
     * @return Allegro_Web_Api_DoBidItemRequest
     */
    public function setVariantId($variantId)
    {
        $this->variantId = $variantId;
        return $this;
    }
}
