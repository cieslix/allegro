<?php

/**
 * Class Allegro_Web_Api_DoRemoveFromWatchListResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRemoveFromWatchListResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfItemremovewatchstruct $watchListResult
     */
    protected $watchListResult = null;

    /**
     * @param Allegro_Web_Api_ArrayOfItemremovewatchstruct $watchListResult
     */
    public function __construct($watchListResult)
    {
        $this->watchListResult = $watchListResult;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemremovewatchstruct
     */
    public function getWatchListResult()
    {
        return $this->watchListResult;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemremovewatchstruct $watchListResult
     * @return Allegro_Web_Api_DoRemoveFromWatchListResponse
     */
    public function setWatchListResult($watchListResult)
    {
        $this->watchListResult = $watchListResult;
        return $this;
    }
}
