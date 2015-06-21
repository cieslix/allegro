<?php

/**
 * Class Allegro_Web_Api_ItemsListType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemsListType extends Allegro_Web_Api_Abstract
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
     * @var int $leftCount
     */
    protected $leftCount = null;

    /**
     * @var int $bidsCount
     */
    protected $bidsCount = null;

    /**
     * @var int $biddersCount
     */
    protected $biddersCount = null;

    /**
     * @var string $quantityType
     */
    protected $quantityType = null;

    /**
     * @var \DateTime $endingTime
     */
    protected $endingTime = null;

    /**
     * @var string $timeToEnd
     */
    protected $timeToEnd = null;

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @var string $conditionInfo
     */
    protected $conditionInfo = null;

    /**
     * @var int $promotionInfo
     */
    protected $promotionInfo = null;

    /**
     * @var int $additionalInfo
     */
    protected $additionalInfo = null;

    /**
     * @var Allegro_Web_Api_UserInfoType $sellerInfo
     */
    protected $sellerInfo = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPriceinfotype $priceInfo
     */
    protected $priceInfo = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPhotoinfotype $photosInfo
     */
    protected $photosInfo = null;

    /**
     * @var Allegro_Web_Api_ArrayOfParameterinfotype $parametersInfo
     */
    protected $parametersInfo = null;

    /**
     * @var AdvertInfoType $advertInfo
     */
    protected $advertInfo = null;

    /**
     * @param int                                      $itemId
     * @param string                                   $itemTitle
     * @param int                                      $leftCount
     * @param int                                      $bidsCount
     * @param int                                      $biddersCount
     * @param string                                   $quantityType
     * @param \DateTime                                $endingTime
     * @param string                                   $timeToEnd
     * @param int                                      $categoryId
     * @param string                                   $conditionInfo
     * @param int                                      $promotionInfo
     * @param int                                      $additionalInfo
     * @param Allegro_Web_Api_UserInfoType             $sellerInfo
     * @param Allegro_Web_Api_ArrayOfPriceinfotype     $priceInfo
     * @param Allegro_Web_Api_ArrayOfPhotoinfotype     $photosInfo
     * @param Allegro_Web_Api_ArrayOfParameterinfotype $parametersInfo
     * @param AdvertInfoType                           $advertInfo
     */
    public function __construct($itemId, $itemTitle, $leftCount, $bidsCount, $biddersCount, $quantityType, \DateTime $endingTime, $timeToEnd, $categoryId, $conditionInfo, $promotionInfo, $additionalInfo, $sellerInfo, $priceInfo, $photosInfo, $parametersInfo, $advertInfo)
    {
        $this->itemId         = $itemId;
        $this->itemTitle      = $itemTitle;
        $this->leftCount      = $leftCount;
        $this->bidsCount      = $bidsCount;
        $this->biddersCount   = $biddersCount;
        $this->quantityType   = $quantityType;
        $this->endingTime     = $endingTime->format(\DateTime::ATOM);
        $this->timeToEnd      = $timeToEnd;
        $this->categoryId     = $categoryId;
        $this->conditionInfo  = $conditionInfo;
        $this->promotionInfo  = $promotionInfo;
        $this->additionalInfo = $additionalInfo;
        $this->sellerInfo     = $sellerInfo;
        $this->priceInfo      = $priceInfo;
        $this->photosInfo     = $photosInfo;
        $this->parametersInfo = $parametersInfo;
        $this->advertInfo     = $advertInfo;
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
     * @return Allegro_Web_Api_ItemsListType
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
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getLeftCount()
    {
        return $this->leftCount;
    }

    /**
     * @param int $leftCount
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setLeftCount($leftCount)
    {
        $this->leftCount = $leftCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getBidsCount()
    {
        return $this->bidsCount;
    }

    /**
     * @param int $bidsCount
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setBidsCount($bidsCount)
    {
        $this->bidsCount = $bidsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getBiddersCount()
    {
        return $this->biddersCount;
    }

    /**
     * @param int $biddersCount
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setBiddersCount($biddersCount)
    {
        $this->biddersCount = $biddersCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantityType()
    {
        return $this->quantityType;
    }

    /**
     * @param string $quantityType
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setQuantityType($quantityType)
    {
        $this->quantityType = $quantityType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndingTime()
    {
        if ($this->endingTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->endingTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $endingTime
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setEndingTime(\DateTime $endingTime)
    {
        $this->endingTime = $endingTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeToEnd()
    {
        return $this->timeToEnd;
    }

    /**
     * @param string $timeToEnd
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setTimeToEnd($timeToEnd)
    {
        $this->timeToEnd = $timeToEnd;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getConditionInfo()
    {
        return $this->conditionInfo;
    }

    /**
     * @param string $conditionInfo
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setConditionInfo($conditionInfo)
    {
        $this->conditionInfo = $conditionInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionInfo()
    {
        return $this->promotionInfo;
    }

    /**
     * @param int $promotionInfo
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setPromotionInfo($promotionInfo)
    {
        $this->promotionInfo = $promotionInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param int $additionalInfo
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_UserInfoType
     */
    public function getSellerInfo()
    {
        return $this->sellerInfo;
    }

    /**
     * @param Allegro_Web_Api_UserInfoType $sellerInfo
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setSellerInfo($sellerInfo)
    {
        $this->sellerInfo = $sellerInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPriceinfotype
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPriceinfotype $priceInfo
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setPriceInfo($priceInfo)
    {
        $this->priceInfo = $priceInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPhotoinfotype
     */
    public function getPhotosInfo()
    {
        return $this->photosInfo;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPhotoinfotype $photosInfo
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setPhotosInfo($photosInfo)
    {
        $this->photosInfo = $photosInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfParameterinfotype
     */
    public function getParametersInfo()
    {
        return $this->parametersInfo;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfParameterinfotype $parametersInfo
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setParametersInfo($parametersInfo)
    {
        $this->parametersInfo = $parametersInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_AdvertInfoType
     */
    public function getAdvertInfo()
    {
        return $this->advertInfo;
    }

    /**
     * @param AdvertInfoType $advertInfo
     * @return Allegro_Web_Api_ItemsListType
     */
    public function setAdvertInfo($advertInfo)
    {
        $this->advertInfo = $advertInfo;
        return $this;
    }
}
