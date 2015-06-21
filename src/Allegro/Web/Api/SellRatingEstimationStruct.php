<?php

/**
 * Class Allegro_Web_Api_SellRatingEstimationStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellRatingEstimationStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellRatingGroupId
     */
    protected $sellRatingGroupId = null;

    /**
     * @var int $sellRatingGroupEstimation
     */
    protected $sellRatingGroupEstimation = null;

    /**
     * @var int $sellRatingReasonId
     */
    protected $sellRatingReasonId = null;

    /**
     * @param int $sellRatingGroupId
     * @param int $sellRatingGroupEstimation
     * @param int $sellRatingReasonId
     */
    public function __construct($sellRatingGroupId, $sellRatingGroupEstimation, $sellRatingReasonId)
    {
        $this->sellRatingGroupId         = $sellRatingGroupId;
        $this->sellRatingGroupEstimation = $sellRatingGroupEstimation;
        $this->sellRatingReasonId        = $sellRatingReasonId;
    }

    /**
     * @return int
     */
    public function getSellRatingGroupId()
    {
        return $this->sellRatingGroupId;
    }

    /**
     * @param int $sellRatingGroupId
     * @return Allegro_Web_Api_SellRatingEstimationStruct
     */
    public function setSellRatingGroupId($sellRatingGroupId)
    {
        $this->sellRatingGroupId = $sellRatingGroupId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellRatingGroupEstimation()
    {
        return $this->sellRatingGroupEstimation;
    }

    /**
     * @param int $sellRatingGroupEstimation
     * @return Allegro_Web_Api_SellRatingEstimationStruct
     */
    public function setSellRatingGroupEstimation($sellRatingGroupEstimation)
    {
        $this->sellRatingGroupEstimation = $sellRatingGroupEstimation;
        return $this;
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
     * @return Allegro_Web_Api_SellRatingEstimationStruct
     */
    public function setSellRatingReasonId($sellRatingReasonId)
    {
        $this->sellRatingReasonId = $sellRatingReasonId;
        return $this;
    }
}
