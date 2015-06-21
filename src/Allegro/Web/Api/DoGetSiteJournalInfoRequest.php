<?php

/**
 * Class Allegro_Web_Api_DoGetSiteJournalInfoRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSiteJournalInfoRequest extends Allegro_Web_Api_Abstract
{
    const INFO_TYPE_LOGGED_USER = 1;
    const INFO_TYPE_ALL_OFFERS  = 0;

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $startingPoint
     */
    protected $startingPoint = null;

    /**
     * @var int $infoType
     */
    protected $infoType = null;

    /**
     * @param string $sessionHandle
     * @param int    $startingPoint
     * @param int    $infoType
     */
    public function __construct($sessionHandle, $startingPoint, $infoType)
    {
        $this->sessionHandle = $sessionHandle;
        $this->startingPoint = $startingPoint;
        $this->infoType      = $infoType;
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
     * @return Allegro_Web_Api_DoGetSiteJournalInfoRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartingPoint()
    {
        return $this->startingPoint;
    }

    /**
     * @param int $startingPoint
     * @return Allegro_Web_Api_DoGetSiteJournalInfoRequest
     */
    public function setStartingPoint($startingPoint)
    {
        $this->startingPoint = $startingPoint;
        return $this;
    }

    /**
     * @return int
     */
    public function getInfoType()
    {
        return $this->infoType;
    }

    /**
     * @param int $infoType
     * @return Allegro_Web_Api_DoGetSiteJournalInfoRequest
     */
    public function setInfoType($infoType)
    {
        $this->infoType = $infoType;
        return $this;
    }
}
