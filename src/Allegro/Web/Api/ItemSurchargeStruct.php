<?php

/**
 * Class Allegro_Web_Api_ItemSurchargeStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemSurchargeStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $surchargeDescription
     */
    protected $surchargeDescription = null;

    /**
     * @var AmountStruct $surchargeAmount
     */
    protected $surchargeAmount = null;

    /**
     * @param string $surchargeDescription
     * @param AmountStruct $surchargeAmount
     */
    public function __construct($surchargeDescription, $surchargeAmount)
    {
        $this->surchargeDescription = $surchargeDescription;
        $this->surchargeAmount = $surchargeAmount;
    }

    /**
     * @return string
     */
    public function getSurchargeDescription()
    {
        return $this->surchargeDescription;
    }

    /**
     * @param string $surchargeDescription
     * @return Allegro_Web_Api_ItemSurchargeStruct
     */
    public function setSurchargeDescription($surchargeDescription)
    {
        $this->surchargeDescription = $surchargeDescription;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_AmountStruct
     */
    public function getSurchargeAmount()
    {
        return $this->surchargeAmount;
    }

    /**
     * @param AmountStruct $surchargeAmount
     * @return Allegro_Web_Api_ItemSurchargeStruct
     */
    public function setSurchargeAmount($surchargeAmount)
    {
        $this->surchargeAmount = $surchargeAmount;
        return $this;
    }
}
