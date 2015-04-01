<?php

/**
 * Class Allegro_Web_Api_DoAddToWatchListResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoAddToWatchListResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_WatchListInfoStruct $watchListInfo
     */
    protected $watchListInfo = null;

    /**
     * @param Allegro_Web_Api_WatchListInfoStruct $watchListInfo
     */
    public function __construct($watchListInfo)
    {
        $this->watchListInfo = $watchListInfo;
    }

    /**
     * @return Allegro_Web_Api_WatchListInfoStruct
     */
    public function getWatchListInfo()
    {
        return $this->watchListInfo;
    }

    /**
     * @param Allegro_Web_Api_WatchListInfoStruct $watchListInfo
     * @return Allegro_Web_Api_DoAddToWatchListResponse
     */
    public function setWatchListInfo($watchListInfo)
    {
        $this->watchListInfo = $watchListInfo;
        return $this;
    }
}
