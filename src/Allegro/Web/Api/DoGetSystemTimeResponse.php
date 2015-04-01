<?php

/**
 * Class Allegro_Web_Api_DoGetSystemTimeResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSystemTimeResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $serverTime
     */
    protected $serverTime = null;

    /**
     * @param int $serverTime
     */
    public function __construct($serverTime)
    {
        $this->serverTime = $serverTime;
    }

    /**
     * @return int
     */
    public function getServerTime()
    {
        return $this->serverTime;
    }

    /**
     * @param int $serverTime
     * @return Allegro_Web_Api_DoGetSystemTimeResponse
     */
    public function setServerTime($serverTime)
    {
        $this->serverTime = $serverTime;
        return $this;
    }
}
