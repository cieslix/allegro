<?php

/**
 * Class Allegro_Web_Api_SellerInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellerInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellerId
     */
    protected $sellerId = null;

    /**
     * @var string $sellerName
     */
    protected $sellerName = null;

    /**
     * @var int $sellerRating
     */
    protected $sellerRating = null;

    /**
     * @var int $sellerInfo
     */
    protected $sellerInfo = null;

    /**
     * @param int    $sellerId
     * @param string $sellerName
     * @param int    $sellerRating
     * @param int    $sellerInfo
     */
    public function __construct($sellerId, $sellerName, $sellerRating, $sellerInfo)
    {
        $this->sellerId     = $sellerId;
        $this->sellerName   = $sellerName;
        $this->sellerRating = $sellerRating;
        $this->sellerInfo   = $sellerInfo;
    }

    /**
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * @param int $sellerId
     * @return Allegro_Web_Api_SellerInfoStruct
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * @param string $sellerName
     * @return Allegro_Web_Api_SellerInfoStruct
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellerRating()
    {
        return $this->sellerRating;
    }

    /**
     * @param int $sellerRating
     * @return Allegro_Web_Api_SellerInfoStruct
     */
    public function setSellerRating($sellerRating)
    {
        $this->sellerRating = $sellerRating;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellerInfo()
    {
        return $this->sellerInfo;
    }

    /**
     * @param int $sellerInfo
     * @return Allegro_Web_Api_SellerInfoStruct
     */
    public function setSellerInfo($sellerInfo)
    {
        $this->sellerInfo = $sellerInfo;
        return $this;
    }
}
