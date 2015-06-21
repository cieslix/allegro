<?php

/**
 * Class Allegro_Web_Api_PostBuyFormSellersStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostBuyFormSellersStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $postBuyFormSellerId
     */
    protected $postBuyFormSellerId = null;

    /**
     * @var string $postBuyFormSellerName
     */
    protected $postBuyFormSellerName = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPostbuyformitemstruct $postBuyFormItems
     */
    protected $postBuyFormItems = null;

    /**
     * @var int $postBuyFormShipmentId
     */
    protected $postBuyFormShipmentId = null;

    /**
     * @var float $postBuyFormPostageAmount
     */
    protected $postBuyFormPostageAmount = null;

    /**
     * @var string $postBuyFormMsgToSeller
     */
    protected $postBuyFormMsgToSeller = null;

    /**
     * @var float $postBuyFormAmount
     */
    protected $postBuyFormAmount = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $postBuyFormSurchargesList
     */
    protected $postBuyFormSurchargesList = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPostbuyformshipmenttrackingstruct $postBuyFormShipmentTracking
     */
    protected $postBuyFormShipmentTracking = null;

    /**
     * @var Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormGdAddress
     */
    protected $postBuyFormGdAddress = null;

    /**
     * @var string $postBuyFormGdAdditionalInfo
     */
    protected $postBuyFormGdAdditionalInfo = null;

    /**
     * @var int $postBuyFormSentBySeller
     */
    protected $postBuyFormSentBySeller = null;

    /**
     * @param int                                                      $postBuyFormSellerId
     * @param string                                                   $postBuyFormSellerName
     * @param Allegro_Web_Api_ArrayOfPostbuyformitemstruct             $postBuyFormItems
     * @param int                                                      $postBuyFormShipmentId
     * @param float                                                    $postBuyFormPostageAmount
     * @param string                                                   $postBuyFormMsgToSeller
     * @param float                                                    $postBuyFormAmount
     * @param Allegro_Web_Api_ArrayOfLong                              $postBuyFormSurchargesList
     * @param Allegro_Web_Api_ArrayOfPostbuyformshipmenttrackingstruct $postBuyFormShipmentTracking
     * @param Allegro_Web_Api_PostBuyFormAddressStruct                 $postBuyFormGdAddress
     * @param string                                                   $postBuyFormGdAdditionalInfo
     * @param int                                                      $postBuyFormSentBySeller
     */
    public function __construct($postBuyFormSellerId, $postBuyFormSellerName, $postBuyFormItems, $postBuyFormShipmentId, $postBuyFormPostageAmount, $postBuyFormMsgToSeller, $postBuyFormAmount, $postBuyFormSurchargesList, $postBuyFormShipmentTracking, $postBuyFormGdAddress, $postBuyFormGdAdditionalInfo, $postBuyFormSentBySeller)
    {
        $this->postBuyFormSellerId         = $postBuyFormSellerId;
        $this->postBuyFormSellerName       = $postBuyFormSellerName;
        $this->postBuyFormItems            = $postBuyFormItems;
        $this->postBuyFormShipmentId       = $postBuyFormShipmentId;
        $this->postBuyFormPostageAmount    = $postBuyFormPostageAmount;
        $this->postBuyFormMsgToSeller      = $postBuyFormMsgToSeller;
        $this->postBuyFormAmount           = $postBuyFormAmount;
        $this->postBuyFormSurchargesList   = $postBuyFormSurchargesList;
        $this->postBuyFormShipmentTracking = $postBuyFormShipmentTracking;
        $this->postBuyFormGdAddress        = $postBuyFormGdAddress;
        $this->postBuyFormGdAdditionalInfo = $postBuyFormGdAdditionalInfo;
        $this->postBuyFormSentBySeller     = $postBuyFormSentBySeller;
    }

    /**
     * @return int
     */
    public function getPostBuyFormSellerId()
    {
        return $this->postBuyFormSellerId;
    }

    /**
     * @param int $postBuyFormSellerId
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormSellerId($postBuyFormSellerId)
    {
        $this->postBuyFormSellerId = $postBuyFormSellerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormSellerName()
    {
        return $this->postBuyFormSellerName;
    }

    /**
     * @param string $postBuyFormSellerName
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormSellerName($postBuyFormSellerName)
    {
        $this->postBuyFormSellerName = $postBuyFormSellerName;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPostbuyformitemstruct
     */
    public function getPostBuyFormItems()
    {
        return $this->postBuyFormItems;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyformitemstruct $postBuyFormItems
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormItems($postBuyFormItems)
    {
        $this->postBuyFormItems = $postBuyFormItems;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormShipmentId()
    {
        return $this->postBuyFormShipmentId;
    }

    /**
     * @param int $postBuyFormShipmentId
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormShipmentId($postBuyFormShipmentId)
    {
        $this->postBuyFormShipmentId = $postBuyFormShipmentId;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormPostageAmount()
    {
        return $this->postBuyFormPostageAmount;
    }

    /**
     * @param float $postBuyFormPostageAmount
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormPostageAmount($postBuyFormPostageAmount)
    {
        $this->postBuyFormPostageAmount = $postBuyFormPostageAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormMsgToSeller()
    {
        return $this->postBuyFormMsgToSeller;
    }

    /**
     * @param string $postBuyFormMsgToSeller
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormMsgToSeller($postBuyFormMsgToSeller)
    {
        $this->postBuyFormMsgToSeller = $postBuyFormMsgToSeller;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormAmount()
    {
        return $this->postBuyFormAmount;
    }

    /**
     * @param float $postBuyFormAmount
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormAmount($postBuyFormAmount)
    {
        $this->postBuyFormAmount = $postBuyFormAmount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getPostBuyFormSurchargesList()
    {
        return $this->postBuyFormSurchargesList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $postBuyFormSurchargesList
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormSurchargesList($postBuyFormSurchargesList)
    {
        $this->postBuyFormSurchargesList = $postBuyFormSurchargesList;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPostbuyformshipmenttrackingstruct
     */
    public function getPostBuyFormShipmentTracking()
    {
        return $this->postBuyFormShipmentTracking;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyformshipmenttrackingstruct $postBuyFormShipmentTracking
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormShipmentTracking($postBuyFormShipmentTracking)
    {
        $this->postBuyFormShipmentTracking = $postBuyFormShipmentTracking;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PostBuyFormAddressStruct
     */
    public function getPostBuyFormGdAddress()
    {
        return $this->postBuyFormGdAddress;
    }

    /**
     * @param Allegro_Web_Api_PostBuyFormAddressStruct $postBuyFormGdAddress
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormGdAddress($postBuyFormGdAddress)
    {
        $this->postBuyFormGdAddress = $postBuyFormGdAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormGdAdditionalInfo()
    {
        return $this->postBuyFormGdAdditionalInfo;
    }

    /**
     * @param string $postBuyFormGdAdditionalInfo
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormGdAdditionalInfo($postBuyFormGdAdditionalInfo)
    {
        $this->postBuyFormGdAdditionalInfo = $postBuyFormGdAdditionalInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormSentBySeller()
    {
        return $this->postBuyFormSentBySeller;
    }

    /**
     * @param int $postBuyFormSentBySeller
     * @return Allegro_Web_Api_PostBuyFormSellersStruct
     */
    public function setPostBuyFormSentBySeller($postBuyFormSentBySeller)
    {
        $this->postBuyFormSentBySeller = $postBuyFormSentBySeller;
        return $this;
    }
}
