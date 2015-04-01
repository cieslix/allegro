<?php

/**
 * Class Allegro_Web_Api_DoGetSellRatingReasonsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSellRatingReasonsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfSellratinginfostruct $sellRatingInfo
     */
    protected $sellRatingInfo = null;

    /**
     * @param Allegro_Web_Api_ArrayOfSellratinginfostruct $sellRatingInfo
     */
    public function __construct($sellRatingInfo)
    {
        $this->sellRatingInfo = $sellRatingInfo;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellratinginfostruct
     */
    public function getSellRatingInfo()
    {
        return $this->sellRatingInfo;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellratinginfostruct $sellRatingInfo
     * @return Allegro_Web_Api_DoGetSellRatingReasonsResponse
     */
    public function setSellRatingInfo($sellRatingInfo)
    {
        $this->sellRatingInfo = $sellRatingInfo;
        return $this;
    }
}
