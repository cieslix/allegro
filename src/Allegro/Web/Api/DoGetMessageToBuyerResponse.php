<?php

/**
 * Class Allegro_Web_Api_DoGetMessageToBuyerResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMessageToBuyerResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_MessageToBuyerStruct $messageToBuyer
     */
    protected $messageToBuyer = null;

    /**
     * @param Allegro_Web_Api_MessageToBuyerStruct $messageToBuyer
     */
    public function __construct($messageToBuyer)
    {
        $this->messageToBuyer = $messageToBuyer;
    }

    /**
     * @return Allegro_Web_Api_MessageToBuyerStruct
     */
    public function getMessageToBuyer()
    {
        return $this->messageToBuyer;
    }

    /**
     * @param Allegro_Web_Api_MessageToBuyerStruct $messageToBuyer
     * @return Allegro_Web_Api_DoGetMessageToBuyerResponse
     */
    public function setMessageToBuyer($messageToBuyer)
    {
        $this->messageToBuyer = $messageToBuyer;
        return $this;
    }
}
