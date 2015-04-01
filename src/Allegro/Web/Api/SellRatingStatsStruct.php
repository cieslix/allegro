<?php

/**
 * Class Allegro_Web_Api_SellRatingStatsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellRatingStatsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sellRatingGroupTitle
     */
    protected $sellRatingGroupTitle = null;

    /**
     * @var string $sellRatingGroupStats
     */
    protected $sellRatingGroupStats = null;

    /**
     * @param string $sellRatingGroupTitle
     * @param string $sellRatingGroupStats
     */
    public function __construct($sellRatingGroupTitle, $sellRatingGroupStats)
    {
        $this->sellRatingGroupTitle = $sellRatingGroupTitle;
        $this->sellRatingGroupStats = $sellRatingGroupStats;
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
     * @return Allegro_Web_Api_SellRatingStatsStruct
     */
    public function setSellRatingGroupTitle($sellRatingGroupTitle)
    {
        $this->sellRatingGroupTitle = $sellRatingGroupTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellRatingGroupStats()
    {
        return $this->sellRatingGroupStats;
    }

    /**
     * @param string $sellRatingGroupStats
     * @return Allegro_Web_Api_SellRatingStatsStruct
     */
    public function setSellRatingGroupStats($sellRatingGroupStats)
    {
        $this->sellRatingGroupStats = $sellRatingGroupStats;
        return $this;
    }
}
