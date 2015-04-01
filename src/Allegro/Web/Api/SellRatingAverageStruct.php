<?php

/**
 * Class Allegro_Web_Api_SellRatingAverageStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellRatingAverageStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sellRatingGroupTitle
     */
    protected $sellRatingGroupTitle = null;

    /**
     * @var float $sellRatingGroupAverage
     */
    protected $sellRatingGroupAverage = null;

    /**
     * @param string $sellRatingGroupTitle
     * @param float $sellRatingGroupAverage
     */
    public function __construct($sellRatingGroupTitle, $sellRatingGroupAverage)
    {
        $this->sellRatingGroupTitle = $sellRatingGroupTitle;
        $this->sellRatingGroupAverage = $sellRatingGroupAverage;
    }

    /**
     * @return string
     */
    public function getSellRatingGroupTitle()
    {
        return $this->sellRatingGroupTitle;
    }

    /**
     * @param string $sellRatingGroupTitle
     * @return Allegro_Web_Api_SellRatingAverageStruct
     */
    public function setSellRatingGroupTitle($sellRatingGroupTitle)
    {
        $this->sellRatingGroupTitle = $sellRatingGroupTitle;
        return $this;
    }

    /**
     * @return float
     */
    public function getSellRatingGroupAverage()
    {
        return $this->sellRatingGroupAverage;
    }

    /**
     * @param float $sellRatingGroupAverage
     * @return Allegro_Web_Api_SellRatingAverageStruct
     */
    public function setSellRatingGroupAverage($sellRatingGroupAverage)
    {
        $this->sellRatingGroupAverage = $sellRatingGroupAverage;
        return $this;
    }
}
