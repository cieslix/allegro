<?php

/**
 * Class Allegro_Web_Api_DealsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DealsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @var int $dealDate
     */
    protected $dealDate = null;

    /**
     * @var int $dealQuantity
     */
    protected $dealQuantity = null;

    /**
     * @var float $dealAmountOriginal
     */
    protected $dealAmountOriginal = null;

    /**
     * @var float $dealAmountDiscounted
     */
    protected $dealAmountDiscounted = null;

    /**
     * @param int   $dealId
     * @param int   $dealDate
     * @param int   $dealQuantity
     * @param float $dealAmountOriginal
     * @param float $dealAmountDiscounted
     */
    public function __construct($dealId, $dealDate, $dealQuantity, $dealAmountOriginal, $dealAmountDiscounted)
    {
        $this->dealId               = $dealId;
        $this->dealDate             = $dealDate;
        $this->dealQuantity         = $dealQuantity;
        $this->dealAmountOriginal   = $dealAmountOriginal;
        $this->dealAmountDiscounted = $dealAmountDiscounted;
    }

    /**
     * @return int
     */
    public function getDealId()
    {
        return $this->dealId;
    }

    /**
     * @param int $dealId
     * @return Allegro_Web_Api_DealsStruct
     */
    public function setDealId($dealId)
    {
        $this->dealId = $dealId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDealDate()
    {
        return $this->dealDate;
    }

    /**
     * @param int $dealDate
     * @return Allegro_Web_Api_DealsStruct
     */
    public function setDealDate($dealDate)
    {
        $this->dealDate = $dealDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getDealQuantity()
    {
        return $this->dealQuantity;
    }

    /**
     * @param int $dealQuantity
     * @return Allegro_Web_Api_DealsStruct
     */
    public function setDealQuantity($dealQuantity)
    {
        $this->dealQuantity = $dealQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getDealAmountOriginal()
    {
        return $this->dealAmountOriginal;
    }

    /**
     * @param float $dealAmountOriginal
     * @return Allegro_Web_Api_DealsStruct
     */
    public function setDealAmountOriginal($dealAmountOriginal)
    {
        $this->dealAmountOriginal = $dealAmountOriginal;
        return $this;
    }

    /**
     * @return float
     */
    public function getDealAmountDiscounted()
    {
        return $this->dealAmountDiscounted;
    }

    /**
     * @param float $dealAmountDiscounted
     * @return Allegro_Web_Api_DealsStruct
     */
    public function setDealAmountDiscounted($dealAmountDiscounted)
    {
        $this->dealAmountDiscounted = $dealAmountDiscounted;
        return $this;
    }
}
