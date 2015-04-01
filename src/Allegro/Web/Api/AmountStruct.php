<?php

/**
 * Class Allegro_Web_Api_AmountStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_AmountStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var float $amountValue
     */
    protected $amountValue = null;

    /**
     * @var string $amountCurrencySign
     */
    protected $amountCurrencySign = null;

    /**
     * @param float $amountValue
     * @param string $amountCurrencySign
     */
    public function __construct($amountValue, $amountCurrencySign)
    {
        $this->amountValue = $amountValue;
        $this->amountCurrencySign = $amountCurrencySign;
    }

    /**
     * @return float
     */
    public function getAmountValue()
    {
        return $this->amountValue;
    }

    /**
     * @param float $amountValue
     * @return Allegro_Web_Api_AmountStruct
     */
    public function setAmountValue($amountValue)
    {
        $this->amountValue = $amountValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmountCurrencySign()
    {
        return $this->amountCurrencySign;
    }

    /**
     * @param string $amountCurrencySign
     * @return Allegro_Web_Api_AmountStruct
     */
    public function setAmountCurrencySign($amountCurrencySign)
    {
        $this->amountCurrencySign = $amountCurrencySign;
        return $this;
    }
}
