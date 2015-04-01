<?php

/**
 * Class Allegro_Web_Api_DoRequestCancelBidResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRequestCancelBidResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $requestValue
     */
    protected $requestValue = null;

    /**
     * @param int $requestValue
     */
    public function __construct($requestValue)
    {
        $this->requestValue = $requestValue;
    }

    /**
     * @return int
     */
    public function getRequestValue()
    {
        return $this->requestValue;
    }

    /**
     * @param int $requestValue
     * @return Allegro_Web_Api_DoRequestCancelBidResponse
     */
    public function setRequestValue($requestValue)
    {
        $this->requestValue = $requestValue;
        return $this;
    }
}
