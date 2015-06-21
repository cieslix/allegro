<?php

/**
 * Class Allegro_Web_Api_NewPostBuyFormSellerStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_NewPostBuyFormSellerStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellerId
     */
    protected $sellerId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $sellerItemIds
     */
    protected $sellerItemIds = null;

    /**
     * @var int $sellerShipmentId
     */
    protected $sellerShipmentId = null;

    /**
     * @var int $sellerGdId
     */
    protected $sellerGdId = null;

    /**
     * @var float $sellerShipmentAmount
     */
    protected $sellerShipmentAmount = null;

    /**
     * @var string $sellerMessageTo
     */
    protected $sellerMessageTo = null;

    /**
     * @param int                         $sellerId
     * @param Allegro_Web_Api_ArrayOfLong $sellerItemIds
     * @param int                         $sellerShipmentId
     * @param int                         $sellerGdId
     * @param float                       $sellerShipmentAmount
     * @param string                      $sellerMessageTo
     */
    public function __construct($sellerId, $sellerItemIds, $sellerShipmentId, $sellerGdId, $sellerShipmentAmount, $sellerMessageTo)
    {
        $this->sellerId             = $sellerId;
        $this->sellerItemIds        = $sellerItemIds;
        $this->sellerShipmentId     = $sellerShipmentId;
        $this->sellerGdId           = $sellerGdId;
        $this->sellerShipmentAmount = $sellerShipmentAmount;
        $this->sellerMessageTo      = $sellerMessageTo;
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
     * @return Allegro_Web_Api_NewPostBuyFormSellerStruct
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getSellerItemIds()
    {
        return $this->sellerItemIds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $sellerItemIds
     * @return Allegro_Web_Api_NewPostBuyFormSellerStruct
     */
    public function setSellerItemIds($sellerItemIds)
    {
        $this->sellerItemIds = $sellerItemIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellerShipmentId()
    {
        return $this->sellerShipmentId;
    }

    /**
     * @param int $sellerShipmentId
     * @return Allegro_Web_Api_NewPostBuyFormSellerStruct
     */
    public function setSellerShipmentId($sellerShipmentId)
    {
        $this->sellerShipmentId = $sellerShipmentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellerGdId()
    {
        return $this->sellerGdId;
    }

    /**
     * @param int $sellerGdId
     * @return Allegro_Web_Api_NewPostBuyFormSellerStruct
     */
    public function setSellerGdId($sellerGdId)
    {
        $this->sellerGdId = $sellerGdId;
        return $this;
    }

    /**
     * @return float
     */
    public function getSellerShipmentAmount()
    {
        return $this->sellerShipmentAmount;
    }

    /**
     * @param float $sellerShipmentAmount
     * @return Allegro_Web_Api_NewPostBuyFormSellerStruct
     */
    public function setSellerShipmentAmount($sellerShipmentAmount)
    {
        $this->sellerShipmentAmount = $sellerShipmentAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellerMessageTo()
    {
        return $this->sellerMessageTo;
    }

    /**
     * @param string $sellerMessageTo
     * @return Allegro_Web_Api_NewPostBuyFormSellerStruct
     */
    public function setSellerMessageTo($sellerMessageTo)
    {
        $this->sellerMessageTo = $sellerMessageTo;
        return $this;
    }
}
