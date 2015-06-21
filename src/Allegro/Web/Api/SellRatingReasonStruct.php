<?php

/**
 * Class Allegro_Web_Api_SellRatingReasonStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellRatingReasonStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellRatingReasonId
     */
    protected $sellRatingReasonId = null;

    /**
     * @var string $sellRatingReasonTitle
     */
    protected $sellRatingReasonTitle = null;

    /**
     * @param int    $sellRatingReasonId
     * @param string $sellRatingReasonTitle
     */
    public function __construct($sellRatingReasonId, $sellRatingReasonTitle)
    {
        $this->sellRatingReasonId    = $sellRatingReasonId;
        $this->sellRatingReasonTitle = $sellRatingReasonTitle;
    }

    /**
     * @return int
     */
    public function getSellRatingReasonId()
    {
        return $this->sellRatingReasonId;
    }

    /**
     * @param int $sellRatingReasonId
     * @return Allegro_Web_Api_SellRatingReasonStruct
     */
    public function setSellRatingReasonId($sellRatingReasonId)
    {
        $this->sellRatingReasonId = $sellRatingReasonId;
        return $this;
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
     * @return Allegro_Web_Api_SellRatingReasonStruct
     */
    public function setSellRatingReasonTitle($sellRatingReasonTitle)
    {
        $this->sellRatingReasonTitle = $sellRatingReasonTitle;
        return $this;
    }
}
