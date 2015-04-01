<?php

/**
 * Class Allegro_Web_Api_DoRequestSurchargeResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRequestSurchargeResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $surchargeResult
     */
    protected $surchargeResult = null;

    /**
     * @param int $surchargeResult
     */
    public function __construct($surchargeResult)
    {
        $this->surchargeResult = $surchargeResult;
    }

    /**
     * @return int
     */
    public function getSurchargeResult()
    {
        return $this->surchargeResult;
    }

    /**
     * @param int $surchargeResult
     * @return Allegro_Web_Api_DoRequestSurchargeResponse
     */
    public function setSurchargeResult($surchargeResult)
    {
        $this->surchargeResult = $surchargeResult;
        return $this;
    }
}
