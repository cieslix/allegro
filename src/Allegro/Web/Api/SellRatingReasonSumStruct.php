<?php

/**
 * Class Allegro_Web_Api_SellRatingReasonSumStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellRatingReasonSumStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sellRatingReasonTitle
     */
    protected $sellRatingReasonTitle = null;

    /**
     * @var int $sellRatingReasonCount
     */
    protected $sellRatingReasonCount = null;

    /**
     * @param string $sellRatingReasonTitle
     * @param int $sellRatingReasonCount
     */
    public function __construct($sellRatingReasonTitle, $sellRatingReasonCount)
    {
        $this->sellRatingReasonTitle = $sellRatingReasonTitle;
        $this->sellRatingReasonCount = $sellRatingReasonCount;
    }

    /**
     * @return string
     */
    public function getSellRatingReasonTitle()
    {
        return $this->sellRatingReasonTitle;
    }

    /**
     * @param string $sellRatingReasonTitle
     * @return Allegro_Web_Api_SellRatingReasonSumStruct
     */
    public function setSellRatingReasonTitle($sellRatingReasonTitle)
    {
        $this->sellRatingReasonTitle = $sellRatingReasonTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellRatingReasonCount()
    {
        return $this->sellRatingReasonCount;
    }

    /**
     * @param int $sellRatingReasonCount
     * @return Allegro_Web_Api_SellRatingReasonSumStruct
     */
    public function setSellRatingReasonCount($sellRatingReasonCount)
    {
        $this->sellRatingReasonCount = $sellRatingReasonCount;
        return $this;
    }
}
