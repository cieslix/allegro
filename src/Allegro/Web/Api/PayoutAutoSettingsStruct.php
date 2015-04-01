<?php

/**
 * Class Allegro_Web_Api_PayoutAutoSettingsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PayoutAutoSettingsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var float $payoutAutoAmount
     */
    protected $payoutAutoAmount = null;

    /**
     * @var Allegro_Web_Api_PayoutAutoFrequencyStruct $payoutAutoFrequency
     */
    protected $payoutAutoFrequency = null;

    /**
     * @param float $payoutAutoAmount
     * @param Allegro_Web_Api_PayoutAutoFrequencyStruct $payoutAutoFrequency
     */
    public function __construct($payoutAutoAmount, $payoutAutoFrequency)
    {
        $this->payoutAutoAmount = $payoutAutoAmount;
        $this->payoutAutoFrequency = $payoutAutoFrequency;
    }

    /**
     * @return float
     */
    public function getPayoutAutoAmount()
    {
        return $this->payoutAutoAmount;
    }

    /**
     * @param float $payoutAutoAmount
     * @return Allegro_Web_Api_PayoutAutoSettingsStruct
     */
    public function setPayoutAutoAmount($payoutAutoAmount)
    {
        $this->payoutAutoAmount = $payoutAutoAmount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PayoutAutoFrequencyStruct
     */
    public function getPayoutAutoFrequency()
    {
        return $this->payoutAutoFrequency;
    }

    /**
     * @param Allegro_Web_Api_PayoutAutoFrequencyStruct $payoutAutoFrequency
     * @return Allegro_Web_Api_PayoutAutoSettingsStruct
     */
    public function setPayoutAutoFrequency($payoutAutoFrequency)
    {
        $this->payoutAutoFrequency = $payoutAutoFrequency;
        return $this;
    }
}
