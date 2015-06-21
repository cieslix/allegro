<?php

/**
 * Class Allegro_Web_Api_SellRatingDetailStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellRatingDetailStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sellRatingGroupTitle
     */
    protected $sellRatingGroupTitle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSellratingreasonsumstruct $sellRatingReasonsSummary
     */
    protected $sellRatingReasonsSummary = null;

    /**
     * @param string                                           $sellRatingGroupTitle
     * @param Allegro_Web_Api_ArrayOfSellratingreasonsumstruct $sellRatingReasonsSummary
     */
    public function __construct($sellRatingGroupTitle, $sellRatingReasonsSummary)
    {
        $this->sellRatingGroupTitle     = $sellRatingGroupTitle;
        $this->sellRatingReasonsSummary = $sellRatingReasonsSummary;
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
     * @return Allegro_Web_Api_SellRatingDetailStruct
     */
    public function setSellRatingGroupTitle($sellRatingGroupTitle)
    {
        $this->sellRatingGroupTitle = $sellRatingGroupTitle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellratingreasonsumstruct
     */
    public function getSellRatingReasonsSummary()
    {
        return $this->sellRatingReasonsSummary;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellratingreasonsumstruct $sellRatingReasonsSummary
     * @return Allegro_Web_Api_SellRatingDetailStruct
     */
    public function setSellRatingReasonsSummary($sellRatingReasonsSummary)
    {
        $this->sellRatingReasonsSummary = $sellRatingReasonsSummary;
        return $this;
    }
}
