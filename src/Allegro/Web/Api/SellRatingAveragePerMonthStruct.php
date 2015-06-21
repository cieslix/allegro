<?php

/**
 * Class Allegro_Web_Api_SellRatingAveragePerMonthStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellRatingAveragePerMonthStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sellRatingMonth
     */
    protected $sellRatingMonth = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSellratingstatsstruct $sellRatingAverageValues
     */
    protected $sellRatingAverageValues = null;

    /**
     * @param string                                       $sellRatingMonth
     * @param Allegro_Web_Api_ArrayOfSellratingstatsstruct $sellRatingAverageValues
     */
    public function __construct($sellRatingMonth, $sellRatingAverageValues)
    {
        $this->sellRatingMonth         = $sellRatingMonth;
        $this->sellRatingAverageValues = $sellRatingAverageValues;
    }

    /**
     * @return string
     */
    public function getSellRatingMonth()
    {
        return $this->sellRatingMonth;
    }

    /**
     * @param string $sellRatingMonth
     * @return Allegro_Web_Api_SellRatingAveragePerMonthStruct
     */
    public function setSellRatingMonth($sellRatingMonth)
    {
        $this->sellRatingMonth = $sellRatingMonth;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellratingstatsstruct
     */
    public function getSellRatingAverageValues()
    {
        return $this->sellRatingAverageValues;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellratingstatsstruct $sellRatingAverageValues
     * @return Allegro_Web_Api_SellRatingAveragePerMonthStruct
     */
    public function setSellRatingAverageValues($sellRatingAverageValues)
    {
        $this->sellRatingAverageValues = $sellRatingAverageValues;
        return $this;
    }
}
