<?php

/**
 * Class Allegro_Web_Api_DoSetFreeDeliveryAmountResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSetFreeDeliveryAmountResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var boolean $responseStatus
     */
    protected $responseStatus = null;

    /**
     * @param boolean $responseStatus
     */
    public function __construct($responseStatus)
    {
        $this->responseStatus = $responseStatus;
    }

    /**
     * @return boolean
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * @param boolean $responseStatus
     * @return Allegro_Web_Api_DoSetFreeDeliveryAmountResponse
     */
    public function setResponseStatus($responseStatus)
    {
        $this->responseStatus = $responseStatus;
        return $this;
    }
}
