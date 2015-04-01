<?php

/**
 * Class Allegro_Web_Api_RelatedItemStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RelatedItemStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemTitle
     */
    protected $itemTitle = null;

    /**
     * @var string $itemThumbnail
     */
    protected $itemThumbnail = null;

    /**
     * @var float $itemPrice
     */
    protected $itemPrice = null;

    /**
     * @var int $itemBoughtCount
     */
    protected $itemBoughtCount = null;

    /**
     * @var float $itemAmount
     */
    protected $itemAmount = null;

    /**
     * @var int $itemPaymentType
     */
    protected $itemPaymentType = null;

    /**
     * @var int $itemSellerId
     */
    protected $itemSellerId = null;

    /**
     * @var string $itemSellerName
     */
    protected $itemSellerName = null;

    /**
     * @var int $itemInvoiceInfo
     */
    protected $itemInvoiceInfo = null;

    /**
     * @var int $itemCategoryId
     */
    protected $itemCategoryId = null;

    /**
     * @param int $itemId
     * @param string $itemTitle
     * @param string $itemThumbnail
     * @param float $itemPrice
     * @param int $itemBoughtCount
     * @param float $itemAmount
     * @param int $itemPaymentType
     * @param int $itemSellerId
     * @param string $itemSellerName
     * @param int $itemInvoiceInfo
     * @param int $itemCategoryId
     */
    public function __construct($itemId, $itemTitle, $itemThumbnail, $itemPrice, $itemBoughtCount, $itemAmount, $itemPaymentType, $itemSellerId, $itemSellerName, $itemInvoiceInfo, $itemCategoryId)
    {
        $this->itemId = $itemId;
        $this->itemTitle = $itemTitle;
        $this->itemThumbnail = $itemThumbnail;
        $this->itemPrice = $itemPrice;
        $this->itemBoughtCount = $itemBoughtCount;
        $this->itemAmount = $itemAmount;
        $this->itemPaymentType = $itemPaymentType;
        $this->itemSellerId = $itemSellerId;
        $this->itemSellerName = $itemSellerName;
        $this->itemInvoiceInfo = $itemInvoiceInfo;
        $this->itemCategoryId = $itemCategoryId;
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
     * @return Allegro_Web_Api_RelatedItemStruct
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
     * @return Allegro_Web_Api_RelatedItemStruct
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemThumbnail()
    {
        return $this->itemThumbnail;
    }

    /**
     * @param string $itemThumbnail
     * @return Allegro_Web_Api_RelatedItemStruct
     */
    public function setItemThumbnail($itemThumbnail)
    {
        $this->itemThumbnail = $itemThumbnail;
        return $this;
    }

    /**
     * @return float
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param float $itemPrice
     * @return Allegro_Web_Api_RelatedItemStruct
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemBoughtCount()
    {
        return $this->itemBoughtCount;
    }

    /**
     * @param int $itemBoughtCount
     * @return Allegro_Web_Api_RelatedItemStruct
     */
    public function setItemBoughtCount($itemBoughtCount)
    {
        $this->itemBoughtCount = $itemBoughtCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getItemAmount()
    {
        return $this->itemAmount;
    }

    /**
     * @param float $itemAmount
     * @return Allegro_Web_Api_RelatedItemStruct
     */
    public function setItemAmount($itemAmount)
    {
        $this->itemAmount = $itemAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemPaymentType()
    {
        return $this->itemPaymentType;
    }

    /**
     * @param int $itemPaymentType
     * @return Allegro_Web_Api_RelatedItemStruct
     */
    public function setItemPaymentType($itemPaymentType)
    {
        $this->itemPaymentType = $itemPaymentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemSellerId()
    {
        return $this->itemSellerId;
    }

    /**
     * @param int $itemSellerId
     * @return Allegro_Web_Api_RelatedItemStruct
     */
    public function setItemSellerId($itemSellerId)
    {
        $this->itemSellerId = $itemSellerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemSellerName()
    {
        return $this->itemSellerName;
    }

    /**
     * @param string $itemSellerName
     * @return Allegro_Web_Api_RelatedItemStruct
     */
    public function setItemSellerName($itemSellerName)
    {
        $this->itemSellerName = $itemSellerName;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemInvoiceInfo()
    {
        return $this->itemInvoiceInfo;
    }

    /**
     * @param int $itemInvoiceInfo
     * @return Allegro_Web_Api_RelatedItemStruct
     */
    public function setItemInvoiceInfo($itemInvoiceInfo)
    {
        $this->itemInvoiceInfo = $itemInvoiceInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemCategoryId()
    {
        return $this->itemCategoryId;
    }

    /**
     * @param int $itemCategoryId
     * @return Allegro_Web_Api_RelatedItemStruct
     */
    public function setItemCategoryId($itemCategoryId)
    {
        $this->itemCategoryId = $itemCategoryId;
        return $this;
    }
}
