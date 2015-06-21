<?php

/**
 * Class Allegro_Web_Api_DoGetMyPayoutsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyPayoutsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $transCreateDateFrom
     */
    protected $transCreateDateFrom = null;

    /**
     * @var int $transCreateDateTo
     */
    protected $transCreateDateTo = null;

    /**
     * @var int $transPageLimit
     */
    protected $transPageLimit = null;

    /**
     * @var int $transOffset
     */
    protected $transOffset = null;

    /**
     * @param string $sessionHandle
     * @param int    $transCreateDateFrom
     * @param int    $transCreateDateTo
     * @param int    $transPageLimit
     * @param int    $transOffset
     */
    public function __construct($sessionHandle, $transCreateDateFrom, $transCreateDateTo, $transPageLimit, $transOffset)
    {
        $this->sessionHandle       = $sessionHandle;
        $this->transCreateDateFrom = $transCreateDateFrom;
        $this->transCreateDateTo   = $transCreateDateTo;
        $this->transPageLimit      = $transPageLimit;
        $this->transOffset         = $transOffset;
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
     * @return Allegro_Web_Api_DoGetMyPayoutsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransCreateDateFrom()
    {
        return $this->transCreateDateFrom;
    }

    /**
     * @param int $transCreateDateFrom
     * @return Allegro_Web_Api_DoGetMyPayoutsRequest
     */
    public function setTransCreateDateFrom($transCreateDateFrom)
    {
        $this->transCreateDateFrom = $transCreateDateFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransCreateDateTo()
    {
        return $this->transCreateDateTo;
    }

    /**
     * @param int $transCreateDateTo
     * @return Allegro_Web_Api_DoGetMyPayoutsRequest
     */
    public function setTransCreateDateTo($transCreateDateTo)
    {
        $this->transCreateDateTo = $transCreateDateTo;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransPageLimit()
    {
        return $this->transPageLimit;
    }

    /**
     * @param int $transPageLimit
     * @return Allegro_Web_Api_DoGetMyPayoutsRequest
     */
    public function setTransPageLimit($transPageLimit)
    {
        $this->transPageLimit = $transPageLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransOffset()
    {
        return $this->transOffset;
    }

    /**
     * @param int $transOffset
     * @return Allegro_Web_Api_DoGetMyPayoutsRequest
     */
    public function setTransOffset($transOffset)
    {
        $this->transOffset = $transOffset;
        return $this;
    }
}
