<?php

/**
 * Class Allegro_Web_Api_DoGetFreeDeliveryAmountResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetFreeDeliveryAmountResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var float $freeDeliveryAmount
     */
    protected $freeDeliveryAmount = null;

    /**
     * @var int $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @param float $freeDeliveryAmount
     * @param int   $activeFlag
     */
    public function __construct($freeDeliveryAmount, $activeFlag)
    {
        $this->freeDeliveryAmount = $freeDeliveryAmount;
        $this->activeFlag         = $activeFlag;
    }

    /**
     * @return float
     */
    public function getFreeDeliveryAmount()
    {
        return $this->freeDeliveryAmount;
    }

    /**
     * @param float $freeDeliveryAmount
     * @return Allegro_Web_Api_DoGetFreeDeliveryAmountResponse
     */
    public function setFreeDeliveryAmount($freeDeliveryAmount)
    {
        $this->freeDeliveryAmount = $freeDeliveryAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getActiveFlag()
    {
        return $this->activeFlag;
    }

    /**
     * @param int $activeFlag
     * @return Allegro_Web_Api_DoGetFreeDeliveryAmountResponse
     */
    public function setActiveFlag($activeFlag)
    {
        $this->activeFlag = $activeFlag;
        return $this;
    }
}
