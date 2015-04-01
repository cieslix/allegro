<?php

/**
 * Class Allegro_Web_Api_PaymentSellersStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PaymentSellersStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $payTransSellerId
     */
    protected $payTransSellerId = null;

    /**
     * @var string $payTransSellerName
     */
    protected $payTransSellerName = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPaymentitemsstruct $payTransItems
     */
    protected $payTransItems = null;

    /**
     * @var float $payTransSellerPostageAmount
     */
    protected $payTransSellerPostageAmount = null;

    /**
     * @param int $payTransSellerId
     * @param string $payTransSellerName
     * @param Allegro_Web_Api_ArrayOfPaymentitemsstruct $payTransItems
     * @param float $payTransSellerPostageAmount
     */
    public function __construct($payTransSellerId, $payTransSellerName, $payTransItems, $payTransSellerPostageAmount)
    {
        $this->payTransSellerId = $payTransSellerId;
        $this->payTransSellerName = $payTransSellerName;
        $this->payTransItems = $payTransItems;
        $this->payTransSellerPostageAmount = $payTransSellerPostageAmount;
    }

    /**
     * @return int
     */
    public function getPayTransSellerId()
    {
        return $this->payTransSellerId;
    }

    /**
     * @param int $payTransSellerId
     * @return Allegro_Web_Api_PaymentSellersStruct
     */
    public function setPayTransSellerId($payTransSellerId)
    {
        $this->payTransSellerId = $payTransSellerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayTransSellerName()
    {
        return $this->payTransSellerName;
    }

    /**
     * @param string $payTransSellerName
     * @return Allegro_Web_Api_PaymentSellersStruct
     */
    public function setPayTransSellerName($payTransSellerName)
    {
        $this->payTransSellerName = $payTransSellerName;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPaymentitemsstruct
     */
    public function getPayTransItems()
    {
        return $this->payTransItems;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPaymentitemsstruct $payTransItems
     * @return Allegro_Web_Api_PaymentSellersStruct
     */
    public function setPayTransItems($payTransItems)
    {
        $this->payTransItems = $payTransItems;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayTransSellerPostageAmount()
    {
        return $this->payTransSellerPostageAmount;
    }

    /**
     * @param float $payTransSellerPostageAmount
     * @return Allegro_Web_Api_PaymentSellersStruct
     */
    public function setPayTransSellerPostageAmount($payTransSellerPostageAmount)
    {
        $this->payTransSellerPostageAmount = $payTransSellerPostageAmount;
        return $this;
    }
}
