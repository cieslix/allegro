<?php

/**
 * Class Allegro_Web_Api_DoGetSessionHandleForWidgetResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSessionHandleForWidgetResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $serverTime
     */
    protected $serverTime = null;

    /**
     * @param string $sessionHandle
     * @param int $serverTime
     */
    public function __construct($sessionHandle, $serverTime)
    {
        $this->sessionHandle = $sessionHandle;
        $this->serverTime = $serverTime;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return Allegro_Web_Api_DoGetSessionHandleForWidgetResponse
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
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
     * @return Allegro_Web_Api_DoGetSessionHandleForWidgetResponse
     */
    public function setServerTime($serverTime)
    {
        $this->serverTime = $serverTime;
        return $this;
    }
}
