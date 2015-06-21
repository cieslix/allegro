<?php

/**
 * Class Allegro_Web_Api_SellRatingInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellRatingInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellRatingGroupId
     */
    protected $sellRatingGroupId = null;

    /**
     * @var string $sellRatingGroupTitle
     */
    protected $sellRatingGroupTitle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSellratingreasonstruct $sellRatingReasons
     */
    protected $sellRatingReasons = null;

    /**
     * @param int                                           $sellRatingGroupId
     * @param string                                        $sellRatingGroupTitle
     * @param Allegro_Web_Api_ArrayOfSellratingreasonstruct $sellRatingReasons
     */
    public function __construct($sellRatingGroupId, $sellRatingGroupTitle, $sellRatingReasons)
    {
        $this->sellRatingGroupId    = $sellRatingGroupId;
        $this->sellRatingGroupTitle = $sellRatingGroupTitle;
        $this->sellRatingReasons    = $sellRatingReasons;
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
     * @return Allegro_Web_Api_SellRatingInfoStruct
     */
    public function setSellRatingGroupId($sellRatingGroupId)
    {
        $this->sellRatingGroupId = $sellRatingGroupId;
        return $this;
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
     * @return Allegro_Web_Api_SellRatingInfoStruct
     */
    public function setSellRatingGroupTitle($sellRatingGroupTitle)
    {
        $this->sellRatingGroupTitle = $sellRatingGroupTitle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellratingreasonstruct
     */
    public function getSellRatingReasons()
    {
        return $this->sellRatingReasons;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellratingreasonstruct $sellRatingReasons
     * @return Allegro_Web_Api_SellRatingInfoStruct
     */
    public function setSellRatingReasons($sellRatingReasons)
    {
        $this->sellRatingReasons = $sellRatingReasons;
        return $this;
    }
}
