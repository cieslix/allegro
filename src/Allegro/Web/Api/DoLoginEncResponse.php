<?php

/**
 * Class Allegro_Web_Api_DoLoginEncResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoLoginEncResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandlePart
     */
    protected $sessionHandlePart = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $serverTime
     */
    protected $serverTime = null;

    /**
     * @param string $sessionHandlePart
     * @param int    $userId
     * @param int    $serverTime
     */
    public function __construct($sessionHandlePart, $userId, $serverTime)
    {
        $this->sessionHandlePart = $sessionHandlePart;
        $this->userId            = $userId;
        $this->serverTime        = $serverTime;
    }

    /**
     * @return string
     */
    public function getSessionHandlePart()
    {
        return $this->sessionHandlePart;
    }

    /**
     * @param string $sessionHandlePart
     * @return Allegro_Web_Api_DoLoginEncResponse
     */
    public function setSessionHandlePart($sessionHandlePart)
    {
        $this->sessionHandlePart = $sessionHandlePart;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return Allegro_Web_Api_DoLoginEncResponse
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
     * @return Allegro_Web_Api_DoLoginEncResponse
     */
    public function setServerTime($serverTime)
    {
        $this->serverTime = $serverTime;
        return $this;
    }
}
