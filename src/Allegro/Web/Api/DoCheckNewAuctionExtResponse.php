<?php

/**
 * Class Allegro_Web_Api_DoCheckNewAuctionExtResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCheckNewAuctionExtResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $itemPrice
     */
    protected $itemPrice = null;

    /**
     * @var string $itemPriceDesc
     */
    protected $itemPriceDesc = null;

    /**
     * @var int $itemIsAllegroStandard
     */
    protected $itemIsAllegroStandard = null;

    /**
     * @param string $itemPrice
     * @param string $itemPriceDesc
     * @param int $itemIsAllegroStandard
     */
    public function __construct($itemPrice, $itemPriceDesc, $itemIsAllegroStandard)
    {
        $this->itemPrice = $itemPrice;
        $this->itemPriceDesc = $itemPriceDesc;
        $this->itemIsAllegroStandard = $itemIsAllegroStandard;
    }

    /**
     * @return string
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param string $itemPrice
     * @return Allegro_Web_Api_DoCheckNewAuctionExtResponse
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemPriceDesc()
    {
        return $this->itemPriceDesc;
    }

    /**
     * @param string $itemPriceDesc
     * @return Allegro_Web_Api_DoCheckNewAuctionExtResponse
     */
    public function setItemPriceDesc($itemPriceDesc)
    {
        $this->itemPriceDesc = $itemPriceDesc;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemIsAllegroStandard()
    {
        return $this->itemIsAllegroStandard;
    }

    /**
     * @param int $itemIsAllegroStandard
     * @return Allegro_Web_Api_DoCheckNewAuctionExtResponse
     */
    public function setItemIsAllegroStandard($itemIsAllegroStandard)
    {
        $this->itemIsAllegroStandard = $itemIsAllegroStandard;
        return $this;
    }
}
