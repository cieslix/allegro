<?php

/**
 * Class Allegro_Web_Api_DoRequestPayoutResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRequestPayoutResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_RequestPayoutStruct $requestPayout
     */
    protected $requestPayout = null;

    /**
     * @param Allegro_Web_Api_RequestPayoutStruct $requestPayout
     */
    public function __construct($requestPayout)
    {
        $this->requestPayout = $requestPayout;
    }

    /**
     * @return Allegro_Web_Api_RequestPayoutStruct
     */
    public function getRequestPayout()
    {
        return $this->requestPayout;
    }

    /**
     * @param Allegro_Web_Api_RequestPayoutStruct $requestPayout
     * @return Allegro_Web_Api_DoRequestPayoutResponse
     */
    public function setRequestPayout($requestPayout)
    {
        $this->requestPayout = $requestPayout;
        return $this;
    }
}
