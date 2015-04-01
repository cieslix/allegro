<?php

/**
 * Class Allegro_Web_Api_FavouritesCategoriesStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FavouritesCategoriesStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sCategoryId
     */
    protected $sCategoryId = null;

    /**
     * @var int $sSubscriptionStatus
     */
    protected $sSubscriptionStatus = null;

    /**
     * @var int $sPosition
     */
    protected $sPosition = null;

    /**
     * @var int $sBuyNowOnly
     */
    protected $sBuyNowOnly = null;

    /**
     * @param int $sCategoryId
     * @param int $sSubscriptionStatus
     * @param int $sPosition
     * @param int $sBuyNowOnly
     */
    public function __construct($sCategoryId, $sSubscriptionStatus, $sPosition, $sBuyNowOnly)
    {
        $this->sCategoryId = $sCategoryId;
        $this->sSubscriptionStatus = $sSubscriptionStatus;
        $this->sPosition = $sPosition;
        $this->sBuyNowOnly = $sBuyNowOnly;
    }

    /**
     * @return int
     */
    public function getSCategoryId()
    {
        return $this->sCategoryId;
    }

    /**
     * @param int $sCategoryId
     * @return Allegro_Web_Api_FavouritesCategoriesStruct
     */
    public function setSCategoryId($sCategoryId)
    {
        $this->sCategoryId = $sCategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSSubscriptionStatus()
    {
        return $this->sSubscriptionStatus;
    }

    /**
     * @param int $sSubscriptionStatus
     * @return Allegro_Web_Api_FavouritesCategoriesStruct
     */
    public function setSSubscriptionStatus($sSubscriptionStatus)
    {
        $this->sSubscriptionStatus = $sSubscriptionStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getSPosition()
    {
        return $this->sPosition;
    }

    /**
     * @param int $sPosition
     * @return Allegro_Web_Api_FavouritesCategoriesStruct
     */
    public function setSPosition($sPosition)
    {
        $this->sPosition = $sPosition;
        return $this;
    }

    /**
     * @return int
     */
    public function getSBuyNowOnly()
    {
        return $this->sBuyNowOnly;
    }

    /**
     * @param int $sBuyNowOnly
     * @return Allegro_Web_Api_FavouritesCategoriesStruct
     */
    public function setSBuyNowOnly($sBuyNowOnly)
    {
        $this->sBuyNowOnly = $sBuyNowOnly;
        return $this;
    }
}
