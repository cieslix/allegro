<?php

/**
 * Class Allegro_Web_Api_DoGetMySellRatingResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMySellRatingResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellRatingTotalCount
     */
    protected $sellRatingTotalCount = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSellratingaveragestruct $sellRatingAverage
     */
    protected $sellRatingAverage = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSellratingdetailstruct $sellRatingDetails
     */
    protected $sellRatingDetails = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSellratingaveragepermonthstruct $sellRatingStatsPerMonth
     */
    protected $sellRatingStatsPerMonth = null;

    /**
     * @param int                                                    $sellRatingTotalCount
     * @param Allegro_Web_Api_ArrayOfSellratingaveragestruct         $sellRatingAverage
     * @param Allegro_Web_Api_ArrayOfSellratingdetailstruct          $sellRatingDetails
     * @param Allegro_Web_Api_ArrayOfSellratingaveragepermonthstruct $sellRatingStatsPerMonth
     */
    public function __construct($sellRatingTotalCount, $sellRatingAverage, $sellRatingDetails, $sellRatingStatsPerMonth)
    {
        $this->sellRatingTotalCount    = $sellRatingTotalCount;
        $this->sellRatingAverage       = $sellRatingAverage;
        $this->sellRatingDetails       = $sellRatingDetails;
        $this->sellRatingStatsPerMonth = $sellRatingStatsPerMonth;
    }

    /**
     * @return int
     */
    public function getSellRatingTotalCount()
    {
        return $this->sellRatingTotalCount;
    }

    /**
     * @param int $sellRatingTotalCount
     * @return Allegro_Web_Api_DoGetMySellRatingResponse
     */
    public function setSellRatingTotalCount($sellRatingTotalCount)
    {
        $this->sellRatingTotalCount = $sellRatingTotalCount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellratingaveragestruct
     */
    public function getSellRatingAverage()
    {
        return $this->sellRatingAverage;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellratingaveragestruct $sellRatingAverage
     * @return Allegro_Web_Api_DoGetMySellRatingResponse
     */
    public function setSellRatingAverage($sellRatingAverage)
    {
        $this->sellRatingAverage = $sellRatingAverage;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellratingdetailstruct
     */
    public function getSellRatingDetails()
    {
        return $this->sellRatingDetails;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellratingdetailstruct $sellRatingDetails
     * @return Allegro_Web_Api_DoGetMySellRatingResponse
     */
    public function setSellRatingDetails($sellRatingDetails)
    {
        $this->sellRatingDetails = $sellRatingDetails;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellratingaveragepermonthstruct
     */
    public function getSellRatingStatsPerMonth()
    {
        return $this->sellRatingStatsPerMonth;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellratingaveragepermonthstruct $sellRatingStatsPerMonth
     * @return Allegro_Web_Api_DoGetMySellRatingResponse
     */
    public function setSellRatingStatsPerMonth($sellRatingStatsPerMonth)
    {
        $this->sellRatingStatsPerMonth = $sellRatingStatsPerMonth;
        return $this;
    }
}
