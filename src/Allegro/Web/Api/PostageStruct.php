<?php

/**
 * Class Allegro_Web_Api_PostageStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostageStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var float $postageAmount
     */
    protected $postageAmount = null;

    /**
     * @var float $postageAmountAdd
     */
    protected $postageAmountAdd = null;

    /**
     * @var int $postagePackSize
     */
    protected $postagePackSize = null;

    /**
     * @var int $postageId
     */
    protected $postageId = null;

    /**
     * @var int $postageFreeShipping
     */
    protected $postageFreeShipping = null;

    /**
     * @var int $postageFreeReturn
     */
    protected $postageFreeReturn = null;

    /**
     * @var Allegro_Web_Api_FulfillmentTimeStruct $postageFulfillmentTime
     */
    protected $postageFulfillmentTime = null;

    /**
     * @param float $postageAmount
     * @param float $postageAmountAdd
     * @param int $postagePackSize
     * @param int $postageId
     * @param int $postageFreeShipping
     * @param int $postageFreeReturn
     * @param Allegro_Web_Api_FulfillmentTimeStruct $postageFulfillmentTime
     */
    public function __construct($postageAmount, $postageAmountAdd, $postagePackSize, $postageId, $postageFreeShipping, $postageFreeReturn, $postageFulfillmentTime)
    {
        $this->postageAmount = $postageAmount;
        $this->postageAmountAdd = $postageAmountAdd;
        $this->postagePackSize = $postagePackSize;
        $this->postageId = $postageId;
        $this->postageFreeShipping = $postageFreeShipping;
        $this->postageFreeReturn = $postageFreeReturn;
        $this->postageFulfillmentTime = $postageFulfillmentTime;
    }

    /**
     * @return float
     */
    public function getPostageAmount()
    {
        return $this->postageAmount;
    }

    /**
     * @param float $postageAmount
     * @return Allegro_Web_Api_PostageStruct
     */
    public function setPostageAmount($postageAmount)
    {
        $this->postageAmount = $postageAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostageAmountAdd()
    {
        return $this->postageAmountAdd;
    }

    /**
     * @param float $postageAmountAdd
     * @return Allegro_Web_Api_PostageStruct
     */
    public function setPostageAmountAdd($postageAmountAdd)
    {
        $this->postageAmountAdd = $postageAmountAdd;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostagePackSize()
    {
        return $this->postagePackSize;
    }

    /**
     * @param int $postagePackSize
     * @return Allegro_Web_Api_PostageStruct
     */
    public function setPostagePackSize($postagePackSize)
    {
        $this->postagePackSize = $postagePackSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostageId()
    {
        return $this->postageId;
    }

    /**
     * @param int $postageId
     * @return Allegro_Web_Api_PostageStruct
     */
    public function setPostageId($postageId)
    {
        $this->postageId = $postageId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostageFreeShipping()
    {
        return $this->postageFreeShipping;
    }

    /**
     * @param int $postageFreeShipping
     * @return Allegro_Web_Api_PostageStruct
     */
    public function setPostageFreeShipping($postageFreeShipping)
    {
        $this->postageFreeShipping = $postageFreeShipping;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostageFreeReturn()
    {
        return $this->postageFreeReturn;
    }

    /**
     * @param int $postageFreeReturn
     * @return Allegro_Web_Api_PostageStruct
     */
    public function setPostageFreeReturn($postageFreeReturn)
    {
        $this->postageFreeReturn = $postageFreeReturn;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_FulfillmentTimeStruct
     */
    public function getPostageFulfillmentTime()
    {
        return $this->postageFulfillmentTime;
    }

    /**
     * @param Allegro_Web_Api_FulfillmentTimeStruct $postageFulfillmentTime
     * @return Allegro_Web_Api_PostageStruct
     */
    public function setPostageFulfillmentTime($postageFulfillmentTime)
    {
        $this->postageFulfillmentTime = $postageFulfillmentTime;
        return $this;
    }
}
